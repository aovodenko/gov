<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\ProductsOptions;
use App\Entity\ProductsOptionsValues;

/**
 * CustomersBasketAttributes
 */
#[ORM\Table(name: 'customers_basket_attributes')]
#[ORM\Entity]
class CustomersBasketAttributes
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_basket_attributes_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersBasketAttributesId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    private $customersId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_id', type: 'text', length: 255, nullable: false)]
    private $productsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_id', type: 'integer', nullable: false)]
    private $productsOptionsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_value_id', type: 'integer', nullable: false)]
    private $productsOptionsValueId = '0';

    #[ORM\ManyToOne(targetEntity: 'App\Entity\CustomersBasket', inversedBy: 'customersBasketAttributes')]
    #[ORM\JoinColumn(name: 'customers_basket_id', referencedColumnName: 'customers_basket_id')]
    private $customersBasket;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\ProductsOptions', inversedBy: 'customersBasketProductsOptions')]
    #[ORM\JoinColumn(name: 'products_options_id', referencedColumnName: 'products_options_id')]
    private $productsOptions;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\ProductsOptionsValues', inversedBy: 'customersBasketProductsOptionsValues')]
    #[ORM\JoinColumn(name: 'products_options_value_id', referencedColumnName: 'products_options_values_id')]
    private $productsOptionsValue;

    public function getCustomersBasketAttributesId(): ?int
    {
        return $this->customersBasketAttributesId;
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function setCustomersId(int $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
    }

    public function getProductsId(): ?string
    {
        return $this->productsId;
    }

    public function setProductsId(string $productsId): self
    {
        $this->productsId = $productsId;

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

    public function getProductsOptionsValueId(): ?int
    {
        return $this->productsOptionsValueId;
    }

    public function setProductsOptionsValueId(int $productsOptionsValueId): self
    {
        $this->productsOptionsValueId = $productsOptionsValueId;

        return $this;
    }

    public function getProductsOptions(): ?ProductsOptions
    {
        return $this->productsOptions;
    }

    public function setProductsOptions(ProductsOptions $productsOptions): self
    {
        $this->productsOptions = $productsOptions;

        return $this;
    }

    public function getProductsOptionsValue(): ?ProductsOptionsValues
    {
        return $this->productsOptionsValue;
    }

    public function setProductsOptionsValue(ProductsOptionsValues $productsOptionsValue): self
    {
        $this->productsOptionsValue = $productsOptionsValue;

        return $this;
    }
}
