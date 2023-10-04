<?php

namespace App\Repository;

use App\Entity\ProductsAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class ProductsAttributesRepository extends ServiceEntityRepository {

    protected $productsAttributesPriceCache;

    public function __construct(ManagerRegistry $registry, CacheInterface $productsAttributesPriceCache) {
        parent::__construct($registry, ProductsAttributes::class);

        $this->productsAttributesPriceCache = $productsAttributesPriceCache;
    }

    public function getProductsAttributesPrice($products_id, $attributes) {
        $entityManager = $this->getEntityManager();

        $products_attributes_cache_key = $products_id;

        foreach ($attributes as $option => $value) {
            $products_attributes_cache_key .= '_' . $option . '_' . $value;
        }

        return $this->productsAttributesPriceCache->get('products_attributes_price_' . $products_attributes_cache_key, function (ItemInterface $item) use ($entityManager, $products_id, $attributes) {
                    $attributes_price = 0;

                    foreach ($attributes as $option => $value) {
                        $attribute_price_relations_rule_found = false;

                        $query = $entityManager->createQuery('
              SELECT
                pa.productsAttributesId,
                pa.pricePrefix,
                pa.optionsValuesPrice,
                group_concat(par.optionsId separator \';\') AS optionsIds,
                group_concat(par.optionsValuesId separator \';\') AS optionsValuesIds,
                COUNT(pa) AS total
              FROM
                App\Entity\ProductsAttributes pa INNER JOIN
                App\Entity\ProductsAttributesRelations par WITH
                      pa.productsAttributesId = par.productsAttributesId
                  AND pa.productsId = :products_id
                  AND pa.optionsId = :options_id
                  AND pa.optionsValuesId = :options_values_id
              GROUP BY
                pa.productsAttributesId
              ORDER BY
                total DESC
            ')
                                ->setParameter('products_id', (int) $products_id)
                                ->setParameter('options_id', (int) $option)
                                ->setParameter('options_values_id', (int) $value)
                        ;

                        $attribute_price_relations = $query->getResult();

                        foreach ($attribute_price_relations as $attribute_price_relation) {
                            $optionsIds = explode(';', $attribute_price_relation['optionsIds']);
                            $optionsValuesIds = explode(';', $attribute_price_relation['optionsValuesIds']);

                            $attribute_price_relations_rule_found = true;

                            for ($i = 0, $n = count($optionsIds); $i < $n; $i++) {
                                if (
                                        !in_array($optionsIds[$i], array_keys($attributes)) ||
                                        $optionsValuesIds[$i] != $attributes[$optionsIds[$i]]
                                ) {
                                    $attribute_price_relations_rule_found = false;

                                    break;
                                }
                            }

                            if ($attribute_price_relations_rule_found) {
                                if ($attribute_price_relation['pricePrefix'] == '+') {
                                    $attributes_price += $attribute_price_relation['optionsValuesPrice'];
                                } else {
                                    $attributes_price -= $attribute_price_relation['optionsValuesPrice'];
                                }

                                break;
                            }
                        }

                        if (!$attribute_price_relations_rule_found) {
                            $query = $entityManager->createQuery('
                SELECT
                  pa.pricePrefix,
                  pa.optionsValuesPrice
                FROM
                  App\Entity\ProductsAttributes pa
                WHERE
                      pa.productsId = :products_id
                  AND pa.optionsId = :options_id
                  AND pa.optionsValuesId = :options_values_id
                  AND pa.productsAttributesId NOT IN(
                    SELECT
                      par.productsAttributesId
                    FROM
                      App\Entity\ProductsAttributesRelations par
                  )
              ')
                                    ->setParameter('products_id', (int) $products_id)
                                    ->setParameter('options_id', (int) $option)
                                    ->setParameter('options_values_id', (int) $value)
                            ;

                            $attribute_price = $query->setMaxResults(1)->getOneOrNullResult();

                            if ($attribute_price) {
                                if ($attribute_price['pricePrefix'] == '+') {
                                    $attributes_price += $attribute_price['optionsValuesPrice'];
                                } else {
                                    $attributes_price -= $attribute_price['optionsValuesPrice'];
                                }
                            }
                        }
                    }

                    return $attributes_price;
                });
    }

}
