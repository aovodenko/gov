<?php
namespace App\Repository;

use App\Entity\TaxRates;
use App\Entity\Configuration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;

class TaxRatesRepository extends ServiceEntityRepository
{
    protected $requestStack;

    public function __construct(ManagerRegistry $registry, RequestStack $requestStack)
    {
        parent::__construct($registry, TaxRates::class);

        $this->requestStack = $requestStack;
    }

    public function getTaxRate($class_id, $country_id = -1, $zone_id = -1)
    {
      $entityManager = $this->getEntityManager();
      $session = $this->requestStack->getSession();

      if(($country_id == -1) && ($zone_id == -1)){
        if(!$session->has('customer_id')){
          $country_id = $entityManager->getRepository(Configuration::class)->getConfigParam('STORE_COUNTRY');
          $zone_id = $entityManager->getRepository(Configuration::class)->getConfigParam('STORE_ZONE');
        }
        else{
          $country_id = $session->get('customer_country_id');
          $zone_id = $session->get('customer_zone_id');
        }
      }

      $query = $entityManager->createQuery('
        SELECT
          sum(tr.taxRate) AS tax_rate
        FROM
          App\Entity\TaxRates tr LEFT JOIN
          App\Entity\ZonesToGeoZones za WITH za.geoZoneId = tr.taxZoneId LEFT JOIN
          App\Entity\GeoZones tz WITH tz.geoZoneId = tr.taxZoneId
        WHERE
              (za.zoneCountryId IS NULL OR za.zoneCountryId = 0 OR za.zoneCountryId = :zone_country_id)
          AND (za.zoneId IS NULL OR za.zoneId = 0 OR za.zoneId = :zone_id)
          AND tr.taxClassId = :tax_class_id
        GROUP BY
          tr.taxPriority
      ')
      ->setParameter('zone_country_id', (int)$country_id)
      ->setParameter('zone_id', (int)$zone_id)
      ->setParameter('tax_class_id', (int)$class_id)
      ;

      $query->enableResultCache();

      $taxes = $query->getResult();

      if($taxes){
        $tax_multiplier = 1.0;

        foreach($taxes as $tax){
          $tax_multiplier *= 1.0 + ($tax['tax_rate'] / 100);
        }

        return ($tax_multiplier - 1.0) * 100;
      }

      return 0;
    }
}
