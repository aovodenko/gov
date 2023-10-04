<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\CustomersBasket;

/**
 * GiftwrapOptions
 */
#[ORM\Table(name: 'giftwrap_options')]
#[ORM\Entity(repositoryClass: 'App\Repository\GiftwrapOptionsRepository')]
#[ORM\Cache('NONSTRICT_READ_WRITE')]
class GiftwrapOptions
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'giftwrap_id', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $giftwrapId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'giftwrap_price', type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $giftwrapPrice;

    #[ORM\OneToMany(targetEntity: 'App\Entity\CustomersBasket', mappedBy: 'giftwrap')]
    private $customersBaskets;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Products', mappedBy: 'giftwrap')]
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();

        $this->customersBaskets = new ArrayCollection();
    }

    public function getGiftwrapId(): ?int
    {
        return $this->giftwrapId;
    }

    public function getGiftwrapPrice(): ?string
    {
        return $this->giftwrapPrice;
    }

    public function setGiftwrapPrice(?string $giftwrapPrice): self
    {
        $this->giftwrapPrice = $giftwrapPrice;

        return $this;
    }

    public function getCustomersBaskets(): ?Collection
    {
        return $this->customersBaskets;
    }

    public function setCustomersBaskets(?Collection $customersBaskets): self
    {
        $this->customersBaskets = $customersBaskets;

        return $this;
    }

    public function getProducts(): ?Collection
    {
        return $this->products;
    }

    public function setProducts(?Collection $products): self
    {
        $this->products = $products;

        return $this;
    }
}
