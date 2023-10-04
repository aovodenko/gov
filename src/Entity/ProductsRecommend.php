<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsRecommend
 */
#[ORM\Table(name: 'products_recommend')]
#[ORM\Entity(repositoryClass: 'App\Repository\ProductsRecommendRepository')]
class ProductsRecommend
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'categories_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $categoriesId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsId;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sort_order', type: 'boolean', nullable: false)]
    private $sortOrder;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_modified', type: 'datetime', nullable: false)]
    private $dateModified;

    #[ORM\ManyToOne(inversedBy: 'productsRecommend', targetEntity: Products::class)]
    #[ORM\JoinColumn(name: 'products_id', referencedColumnName: 'products_id', nullable: false)]
    private ?Products $products = null;

    public function getCategoriesId(): ?int
    {
        return $this->categoriesId;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getSortOrder(): ?bool
    {
        return $this->sortOrder;
    }

    public function setSortOrder(bool $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function isSortOrder(): ?bool
    {
        return $this->sortOrder;
    }
    
}
