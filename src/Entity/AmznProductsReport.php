<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznProductsReport
 */
#[ORM\Table(name: 'amzn_products_report')]
#[ORM\Entity]
class AmznProductsReport
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'asin', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $asin;

    /**
     * @var string
     */
    #[ORM\Column(name: 'mp', type: 'string', length: 2, nullable: false, options: ['default' => 'us', 'fixed' => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $mp = 'us';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sku', type: 'string', length: 256, nullable: true)]
    private $sku;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'price', type: 'string', length: 256, nullable: true)]
    private $price;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'reviews_updated', type: 'datetime', nullable: true)]
    private $reviewsUpdated;

    public function getAsin(): ?string
    {
        return $this->asin;
    }

    public function getMp(): ?string
    {
        return $this->mp;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getReviewsUpdated(): ?\DateTimeInterface
    {
        return $this->reviewsUpdated;
    }

    public function setReviewsUpdated(?\DateTimeInterface $reviewsUpdated): self
    {
        $this->reviewsUpdated = $reviewsUpdated;

        return $this;
    }


}
