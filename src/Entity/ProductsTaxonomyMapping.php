<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsTaxonomyMapping
 */
#[ORM\Table(name: 'products_taxonomy_mapping')]
#[ORM\Entity]
class ProductsTaxonomyMapping
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'products_taxonomy', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsTaxonomy = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_marketing_taxonomy', type: 'string', length: 70, nullable: true)]
    private $productsMarketingTaxonomy;

    public function getProductsTaxonomy(): ?string
    {
        return $this->productsTaxonomy;
    }

    public function getProductsMarketingTaxonomy(): ?string
    {
        return $this->productsMarketingTaxonomy;
    }

    public function setProductsMarketingTaxonomy(?string $productsMarketingTaxonomy): self
    {
        $this->productsMarketingTaxonomy = $productsMarketingTaxonomy;

        return $this;
    }


}
