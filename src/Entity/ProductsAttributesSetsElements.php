<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsAttributesSetsElements
 */
#[ORM\Table(name: 'products_attributes_sets_elements')]
#[ORM\Entity]
class ProductsAttributesSetsElements
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_sets_elements_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsAttributesSetsElementsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_sets_id', type: 'integer', nullable: false)]
    private $productsAttributesSetsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'options_values_id', type: 'integer', nullable: false)]
    private $optionsValuesId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'options_values_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $optionsValuesPrice = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'price_prefix', type: 'string', length: 1, nullable: false, options: ['default' => '+', 'fixed' => true])]
    private $pricePrefix = '+';

    /**
     * @var int
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: false, options: ['default' => 1])]
    private $sortOrder = 1;

    public function getProductsAttributesSetsElementsId(): ?int
    {
        return $this->productsAttributesSetsElementsId;
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

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
