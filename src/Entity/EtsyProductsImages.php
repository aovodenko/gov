<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtsyProductsImages
 */
#[ORM\Table(name: 'etsy_products_images')]
#[ORM\Entity]
class EtsyProductsImages
{
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
    #[ORM\Column(name: 'listing_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $listingId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'listing_image_id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $listingImageId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_image', type: 'string', length: 256, nullable: false)]
    private $productsImage;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true, options: ['default' => 1])]
    private $sortOrder = 1;

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getListingId(): ?int
    {
        return $this->listingId;
    }

    public function getListingImageId(): ?string
    {
        return $this->listingImageId;
    }

    public function getProductsImage(): ?string
    {
        return $this->productsImage;
    }

    public function setProductsImage(string $productsImage): self
    {
        $this->productsImage = $productsImage;

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
