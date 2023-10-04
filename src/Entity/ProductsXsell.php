<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsXsell
 */
#[ORM\Table(name: 'products_xsell')]
#[ORM\Index(name: 'idx_products_id', columns: ['products_id'])]
#[ORM\Index(name: 'idx_xsell_id', columns: ['xsell_id'])]
#[ORM\Entity]
class ProductsXsell
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'ID', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false, options: ['default' => 1, 'unsigned' => true])]
    private $productsId = 1;

    /**
     * @var int
     */
    #[ORM\Column(name: 'xsell_id', type: 'integer', nullable: false, options: ['default' => 1, 'unsigned' => true])]
    private $xsellId = 1;

    /**
     * @var int
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: false, options: ['default' => 1, 'unsigned' => true])]
    private $sortOrder = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function setProductsId(int $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }

    public function getXsellId(): ?int
    {
        return $this->xsellId;
    }

    public function setXsellId(int $xsellId): self
    {
        $this->xsellId = $xsellId;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
