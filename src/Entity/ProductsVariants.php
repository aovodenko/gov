<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsVariants
 */
#[ORM\Table(name: 'products_variants')]
#[ORM\Entity]
class ProductsVariants
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_variants_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsVariantsId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_variants_upc', type: 'string', length: 64, nullable: true)]
    private $productsVariantsUpc;

    public function getProductsVariantsId(): ?int
    {
        return $this->productsVariantsId;
    }

    public function getProductsVariantsUpc(): ?string
    {
        return $this->productsVariantsUpc;
    }

    public function setProductsVariantsUpc(?string $productsVariantsUpc): self
    {
        $this->productsVariantsUpc = $productsVariantsUpc;

        return $this;
    }


}
