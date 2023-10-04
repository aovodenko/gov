<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtsyProducts
 */
#[ORM\Table(name: 'etsy_products')]
#[ORM\Entity]
class EtsyProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'listing_id', type: 'integer', nullable: true)]
    private $listingId;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'renew', type: 'boolean', nullable: true)]
    private $renew = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true)]
    private $dateAdded;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_modified', type: 'datetime', nullable: true)]
    private $dateModified;

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getListingId(): ?int
    {
        return $this->listingId;
    }

    public function setListingId(?int $listingId): self
    {
        $this->listingId = $listingId;

        return $this;
    }

    public function getRenew(): ?bool
    {
        return $this->renew;
    }

    public function setRenew(?bool $renew): self
    {
        $this->renew = $renew;

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

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(?\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }


}
