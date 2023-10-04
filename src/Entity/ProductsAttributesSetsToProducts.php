<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsAttributesSetsToProducts
 */
#[ORM\Table(name: 'products_attributes_sets_to_products')]
#[ORM\Entity]
class ProductsAttributesSetsToProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_sets_to_products', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsAttributesSetsToProducts;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_sets_id', type: 'integer', nullable: false)]
    private $productsAttributesSetsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    private $productsId = '0';

    public function getProductsAttributesSetsToProducts(): ?int
    {
        return $this->productsAttributesSetsToProducts;
    }

    public function getProductsAttributesSetsId(): ?int
    {
        return $this->productsAttributesSetsId;
    }

    public function setProductsAttributesSetsId(int $productsAttributesSetsId): self
    {
        $this->productsAttributesSetsId = $productsAttributesSetsId;

        return $this;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function setProductsId(int $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }


}
