<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsAttributesSets
 */
#[ORM\Table(name: 'products_attributes_sets')]
#[ORM\Entity]
class ProductsAttributesSets
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_sets_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsAttributesSetsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_attributes_sets_name', type: 'string', length: 50, nullable: false)]
    private $productsAttributesSetsName;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_id', type: 'integer', nullable: false)]
    private $productsOptionsId = '0';

    public function getProductsAttributesSetsId(): ?int
    {
        return $this->productsAttributesSetsId;
    }

    public function getProductsAttributesSetsName(): ?string
    {
        return $this->productsAttributesSetsName;
    }

    public function setProductsAttributesSetsName(string $productsAttributesSetsName): self
    {
        $this->productsAttributesSetsName = $productsAttributesSetsName;

        return $this;
    }

    public function getProductsOptionsId(): ?int
    {
        return $this->productsOptionsId;
    }

    public function setProductsOptionsId(int $productsOptionsId): self
    {
        $this->productsOptionsId = $productsOptionsId;

        return $this;
    }


}
