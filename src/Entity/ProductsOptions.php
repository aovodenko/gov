<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsOptions
 */
#[ORM\Table(name: 'products_options')]
#[ORM\Entity]
#[ORM\Cache('NONSTRICT_READ_WRITE')]
class ProductsOptions
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
    private $languageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_options_name', type: 'string', length: 32, nullable: false)]
    private $productsOptionsName;

    #[ORM\OneToMany(targetEntity: 'App\Entity\ProductsAttributes', mappedBy: 'options')]
    private $productsAttributes;

    #[ORM\OneToMany(targetEntity: 'App\Entity\CustomersBasketAttributes', mappedBy: 'productsOptions')]
    private $customersBasketProductsOptions;

    #[ORM\OneToMany(targetEntity: 'App\Entity\CustomersBasketAttributes', mappedBy: 'productsOptionsValue')]
    private $customersBasketProductsOptionsValues;

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


}
