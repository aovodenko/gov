<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsVariantsImages
 */
#[ORM\Table(name: 'products_variants_images')]
#[ORM\Entity]
class ProductsVariantsImages
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_variants_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsVariantsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_extra_images_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsExtraImagesId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_variants_image', type: 'string', length: 255, nullable: false)]
    private $productsVariantsImage;

    public function getProductsVariantsId(): ?int
    {
        return $this->productsVariantsId;
    }

    public function getProductsExtraImagesId(): ?int
    {
        return $this->productsExtraImagesId;
    }

    public function getProductsVariantsImage(): ?string
    {
        return $this->productsVariantsImage;
    }

    public function setProductsVariantsImage(string $productsVariantsImage): self
    {
        $this->productsVariantsImage = $productsVariantsImage;

        return $this;
    }


}
