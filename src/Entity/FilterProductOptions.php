<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilterProductOptions
 */
#[ORM\Table(name: 'filter_product_options')]
#[ORM\Entity]
class FilterProductOptions
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_options_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsOptionsId = '0';

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
    #[ORM\Column(name: 'products_options_name', type: 'string', length: 32, nullable: false)]
    private $productsOptionsName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_options_label', type: 'string', length: 64, nullable: true)]
    private $productsOptionsLabel = '';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder = '0';

    public function getProductsOptionsId(): ?int
    {
        return $this->productsOptionsId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getProductsOptionsName(): ?string
    {
        return $this->productsOptionsName;
    }

    public function setProductsOptionsName(string $productsOptionsName): self
    {
        $this->productsOptionsName = $productsOptionsName;

        return $this;
    }

    public function getProductsOptionsLabel(): ?string
    {
        return $this->productsOptionsLabel;
    }

    public function setProductsOptionsLabel(?string $productsOptionsLabel): self
    {
        $this->productsOptionsLabel = $productsOptionsLabel;

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
