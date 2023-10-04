<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsOptionsValues
 */
#[ORM\Table(name: 'products_options_values')]
#[ORM\Entity]
#[ORM\Cache('NONSTRICT_READ_WRITE')]
class ProductsOptionsValues
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
    private $languageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_options_values_name', type: 'string', length: 64, nullable: false)]
    private $productsOptionsValuesName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_options_values_image', type: 'string', length: 255, nullable: true)]
    private $productsOptionsValuesImage;

    #[ORM\OneToMany(targetEntity: 'App\Entity\ProductsAttributes', mappedBy: 'optionsValues')]
    private $productsAttributes;

    #[ORM\OneToMany(targetEntity: 'App\Entity\CustomersBasketAttributes', mappedBy: 'productsOptionsValue')]
    private $customersBasketProductsOptionsValues;

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

    public function getProductsOptionsValuesImage(): ?string
    {
        return $this->productsOptionsValuesImage;
    }

    public function setProductsOptionsValuesImage(?string $productsOptionsValuesImage): self
    {
        $this->productsOptionsValuesImage = $productsOptionsValuesImage;

        return $this;
    }


}
