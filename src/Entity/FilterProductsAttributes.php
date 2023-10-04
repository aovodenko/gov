<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilterProductsAttributes
 */
#[ORM\Table(name: 'filter_products_attributes')]
#[ORM\Index(name: 'options_values_id', columns: ['options_values_id'])]
#[ORM\Index(name: 'products_id', columns: ['products_id'])]
#[ORM\UniqueConstraint(name: 'products_id_options_values_id', columns: ['products_id', 'options_values_id'])]
#[ORM\Entity]
class FilterProductsAttributes
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsAttributesId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    private $productsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'options_id', type: 'integer', nullable: false)]
    private $optionsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'options_values_id', type: 'integer', nullable: false)]
    private $optionsValuesId = '0';

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

    public function getProductsAttributesId(): ?int
    {
        return $this->productsAttributesId;
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

    public function getOptionsId(): ?int
    {
        return $this->optionsId;
    }

    public function setOptionsId(int $optionsId): self
    {
        $this->optionsId = $optionsId;

        return $this;
    }

    public function getOptionsValuesId(): ?int
    {
        return $this->optionsValuesId;
    }

    public function setOptionsValuesId(int $optionsValuesId): self
    {
        $this->optionsValuesId = $optionsValuesId;

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
