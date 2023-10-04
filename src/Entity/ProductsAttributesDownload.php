<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsAttributesDownload
 */
#[ORM\Table(name: 'products_attributes_download')]
#[ORM\Entity]
class ProductsAttributesDownload
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_attributes_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsAttributesId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_attributes_filename', type: 'string', length: 255, nullable: false)]
    private $productsAttributesFilename;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_attributes_maxdays', type: 'integer', nullable: true)]
    private $productsAttributesMaxdays = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_attributes_maxcount', type: 'integer', nullable: true)]
    private $productsAttributesMaxcount = '0';

    public function getProductsAttributesId(): ?int
    {
        return $this->productsAttributesId;
    }

    public function getProductsAttributesFilename(): ?string
    {
        return $this->productsAttributesFilename;
    }

    public function setProductsAttributesFilename(string $productsAttributesFilename): self
    {
        $this->productsAttributesFilename = $productsAttributesFilename;

        return $this;
    }

    public function getProductsAttributesMaxdays(): ?int
    {
        return $this->productsAttributesMaxdays;
    }

    public function setProductsAttributesMaxdays(?int $productsAttributesMaxdays): self
    {
        $this->productsAttributesMaxdays = $productsAttributesMaxdays;

        return $this;
    }

    public function getProductsAttributesMaxcount(): ?int
    {
        return $this->productsAttributesMaxcount;
    }

    public function setProductsAttributesMaxcount(?int $productsAttributesMaxcount): self
    {
        $this->productsAttributesMaxcount = $productsAttributesMaxcount;

        return $this;
    }


}
