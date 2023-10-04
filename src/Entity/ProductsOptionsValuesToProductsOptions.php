<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsOptionsValuesToProductsOptions
 */
#[ORM\Table(name: 'products_options_values_to_products_options')]
#[ORM\Entity]
class ProductsOptionsValuesToProductsOptions
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_values_to_products_options_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsOptionsValuesToProductsOptionsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_id', type: 'integer', nullable: false)]
    private $productsOptionsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_values_id', type: 'integer', nullable: false)]
    private $productsOptionsValuesId = '0';

    public function getProductsOptionsValuesToProductsOptionsId(): ?int
    {
        return $this->productsOptionsValuesToProductsOptionsId;
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

    public function getProductsOptionsValuesId(): ?int
    {
        return $this->productsOptionsValuesId;
    }

    public function setProductsOptionsValuesId(int $productsOptionsValuesId): self
    {
        $this->productsOptionsValuesId = $productsOptionsValuesId;

        return $this;
    }


}
