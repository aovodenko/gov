<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Products;
use App\Entity\GiftwrapOptions;

/**
 * CustomersBasket
 */
#[ORM\Table(name: 'customers_basket')]
#[ORM\Entity(repositoryClass: 'App\Repository\CustomersBasketRepository')]
class CustomersBasket
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_basket_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersBasketId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    private $customersId;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Customers', inversedBy: 'customersBasket')]
    #[ORM\JoinColumn(name: 'customers_id', referencedColumnName: 'customers_id')]
    private $customers;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_id', type: 'text', length: 255, nullable: false)]
    private $productsId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'giftwrap_id', type: 'integer', nullable: true)]
    private $giftwrapId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gv_to', type: 'string', length: 255, nullable: true)]
    private $gvTo;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gv_from', type: 'string', length: 255, nullable: true)]
    private $gvFrom;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_basket_quantity', type: 'integer', nullable: false)]
    private $customersBasketQuantity = 0;

    /**
     * @var string
     */
    #[ORM\Column(name: 'final_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $finalPrice = 0;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_basket_date_added', type: 'string', length: 8, nullable: true)]
    private $customersBasketDateAdded;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\GiftwrapOptions', inversedBy: 'customersBaskets')]
    #[ORM\JoinColumn(name: 'giftwrap_id', referencedColumnName: 'giftwrap_id')]
    private $giftwrap;

    #[ORM\OneToMany(targetEntity: 'App\Entity\CustomersBasketAttributes', mappedBy: 'customersBasket')]
    private $customersBasketAttributes;

    private $products;

    public function __construct()
    {
        $this->customersBasketAttributes = new ArrayCollection();
    }

    public function getCustomersBasketId(): ?int
    {
        return $this->customersBasketId;
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

    public function getProductsId(): ?string
    {
        return $this->productsId;
    }

    public function setProductsId(string $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }

    public function getGiftwrapId(): ?int
    {
        return $this->giftwrapId;
    }

    public function setGiftwrapId(?int $giftwrapId): self
    {
        $this->giftwrapId = $giftwrapId;

        return $this;
    }

    public function getGvTo(): ?string
    {
        return $this->gvTo;
    }

    public function setGvTo(?string $gvTo): self
    {
        $this->gvTo = $gvTo;

        return $this;
    }

    public function getGvFrom(): ?string
    {
        return $this->gvFrom;
    }

    public function setGvFrom(?string $gvFrom): self
    {
        $this->gvFrom = $gvFrom;

        return $this;
    }

    public function getCustomersBasketQuantity(): ?int
    {
        return $this->customersBasketQuantity;
    }

    public function setCustomersBasketQuantity(int $customersBasketQuantity): self
    {
        $this->customersBasketQuantity = $customersBasketQuantity;

        return $this;
    }

    public function getFinalPrice(): ?string
    {
        return $this->finalPrice;
    }

    public function setFinalPrice(string $finalPrice): self
    {
        $this->finalPrice = $finalPrice;

        return $this;
    }

    public function getCustomersBasketDateAdded(): ?string
    {
        return $this->customersBasketDateAdded;
    }

    public function setCustomersBasketDateAdded(?string $customersBasketDateAdded): self
    {
        $this->customersBasketDateAdded = $customersBasketDateAdded;

        return $this;
    }

    public function getCustomersBasketAttributes(): Collection
    {
        return $this->customersBasketAttributes;
    }

    public function setCustomersBasketAttributes($customersBasketAttributes): self
    {
        $this->customersBasketAttributes = $customersBasketAttributes;

        return $this;
    }

    public function addCustomersBasketAttribute($customersBasketAttribute): self
    {
        $this->customersBasketAttributes->add($customersBasketAttribute);

        return $this;
    }

    public function getGiftwrap(): ?GiftwrapOptions
    {
        return $this->giftwrap;
    }

    public function setGiftwrap(GiftwrapOptions $giftwrap): self
    {
        $this->giftwrap = $giftwrap;

        return $this;
    }

    public function getProducts(): Products
    {
        return $this->products;
    }

    public function setProducts(Products $products): self
    {
        $this->products = $products;

        return $this;
    }
}
