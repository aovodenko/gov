<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WishlistsProducts
 */
#[ORM\Table(name: 'wishlists_products')]
#[ORM\Entity]
class WishlistsProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'wishlists_products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $wishlistsProductsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'wishlists_id', type: 'integer', nullable: false)]
    private $wishlistsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    private $customersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    private $productsId;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true)]
    private $dateAdded;

    public function getWishlistsProductsId(): ?int
    {
        return $this->wishlistsProductsId;
    }

    public function getWishlistsId(): ?int
    {
        return $this->wishlistsId;
    }

    public function setWishlistsId(int $wishlistsId): self
    {
        $this->wishlistsId = $wishlistsId;

        return $this;
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function setCustomersId(int $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
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

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }


}
