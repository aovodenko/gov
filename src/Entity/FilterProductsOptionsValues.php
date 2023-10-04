<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilterProductsOptionsValues
 */
#[ORM\Table(name: 'filter_products_options_values')]
#[ORM\Entity]
class FilterProductsOptionsValues
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_values_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsOptionsValuesId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_options_values_name', type: 'string', length: 64, nullable: false)]
    private $productsOptionsValuesName;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder = '0';

    public function getProductsOptionsValuesId(): ?int
    {
        return $this->productsOptionsValuesId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getProductsOptionsValuesName(): ?string
    {
        return $this->productsOptionsValuesName;
    }

    public function setProductsOptionsValuesName(string $productsOptionsValuesName): self
    {
        $this->productsOptionsValuesName = $productsOptionsValuesName;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(?int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
