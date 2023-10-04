<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsVariantsToProductsAttributes
 */
#[ORM\Table(name: 'products_variants_to_products_attributes')]
#[ORM\Entity]
class ProductsVariantsToProductsAttributes
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_variants_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsVariantsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'options_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $optionsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'options_values_id', type: 'integer', nullable: false)]
    private $optionsValuesId;

    public function getProductsVariantsId(): ?int
    {
        return $this->productsVariantsId;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getOptionsId(): ?int
    {
        return $this->optionsId;
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


}
