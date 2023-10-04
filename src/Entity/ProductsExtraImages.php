<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsExtraImages
 */
#[ORM\Table(name: 'products_extra_images')]
#[ORM\Entity]
class ProductsExtraImages
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_extra_images_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsExtraImagesId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: true)]
    private $productsId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_extra_image', type: 'string', length: 64, nullable: true)]
    private $productsExtraImage;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'amzn_default', type: 'boolean', nullable: true)]
    private $amznDefault = '0';

    public function getProductsExtraImagesId(): ?int
    {
        return $this->productsExtraImagesId;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function setProductsId(?int $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }

    public function getProductsExtraImage(): ?string
    {
        return $this->productsExtraImage;
    }

    public function setProductsExtraImage(?string $productsExtraImage): self
    {
        $this->productsExtraImage = $productsExtraImage;

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

    public function getAmznDefault(): ?bool
    {
        return $this->amznDefault;
    }

    public function setAmznDefault(?bool $amznDefault): self
    {
        $this->amznDefault = $amznDefault;

        return $this;
    }


}
