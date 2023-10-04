<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersProductsAttributes
 */
#[ORM\Table(name: 'orders_products_attributes')]
#[ORM\Entity]
class OrdersProductsAttributes
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_products_attributes_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersProductsAttributesId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: true)]
    private $ordersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_products_id', type: 'integer', nullable: false)]
    private $ordersProductsId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_options', type: 'string', length: 32, nullable: false)]
    private $productsOptions;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_options_values', type: 'string', length: 32, nullable: false)]
    private $productsOptionsValues;

    /**
     * @var string
     */
    #[ORM\Column(name: 'options_values_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $optionsValuesPrice = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'price_prefix', type: 'string', length: 1, nullable: false, options: ['fixed' => true])]
    private $pricePrefix;

    public function getOrdersProductsAttributesId(): ?int
    {
        return $this->ordersProductsAttributesId;
    }

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
    }

    public function setOrdersId(?string $ordersId): self
    {
        $this->ordersId = $ordersId;

        return $this;
    }

    public function getOrdersProductsId(): ?int
    {
        return $this->ordersProductsId;
    }

    public function setOrdersProductsId(int $ordersProductsId): self
    {
        $this->ordersProductsId = $ordersProductsId;

        return $this;
    }

    public function getProductsOptions(): ?string
    {
        return $this->productsOptions;
    }

    public function setProductsOptions(string $productsOptions): self
    {
        $this->productsOptions = $productsOptions;

        return $this;
    }

    public function getProductsOptionsValues(): ?string
    {
        return $this->productsOptionsValues;
    }

    public function setProductsOptionsValues(string $productsOptionsValues): self
    {
        $this->productsOptionsValues = $productsOptionsValues;

        return $this;
    }

    public function getOptionsValuesPrice(): ?string
    {
        return $this->optionsValuesPrice;
    }

    public function setOptionsValuesPrice(string $optionsValuesPrice): self
    {
        $this->optionsValuesPrice = $optionsValuesPrice;

        return $this;
    }

    public function getPricePrefix(): ?string
    {
        return $this->pricePrefix;
    }

    public function setPricePrefix(string $pricePrefix): self
    {
        $this->pricePrefix = $pricePrefix;

        return $this;
    }


}
