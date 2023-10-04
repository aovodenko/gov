<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsAttributesRelations
 */
#[ORM\Table(name: 'products_attributes_relations')]
#[ORM\Entity]
class ProductsAttributesRelations
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_relations_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsAttributesRelationsId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_attributes_id', type: 'integer', nullable: true)]
    private $productsAttributesId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'options_id', type: 'integer', nullable: true)]
    private $optionsId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'options_values_id', type: 'integer', nullable: true)]
    private $optionsValuesId = '0';

    #[ORM\ManyToOne(targetEntity: 'App\Entity\ProductsAttributes', inversedBy: 'productsAttributesRelations')]
    #[ORM\JoinColumn(name: 'products_attributes_id', referencedColumnName: 'products_attributes_id')]
    private $productsAttributes;    

    public function getProductsAttributesRelationsId(): ?int
    {
        return $this->productsAttributesRelationsId;
    }

    public function getProductsAttributesId(): ?int
    {
        return $this->productsAttributesId;
    }

    public function setProductsAttributesId(?int $productsAttributesId): self
    {
        $this->productsAttributesId = $productsAttributesId;

        return $this;
    }

    public function getOptionsId(): ?int
    {
        return $this->optionsId;
    }

    public function setOptionsId(?int $optionsId): self
    {
        $this->optionsId = $optionsId;

        return $this;
    }

    public function getOptionsValuesId(): ?int
    {
        return $this->optionsValuesId;
    }

    public function setOptionsValuesId(?int $optionsValuesId): self
    {
        $this->optionsValuesId = $optionsValuesId;

        return $this;
    }


}
