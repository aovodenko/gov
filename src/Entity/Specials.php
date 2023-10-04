<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specials
 */
#[ORM\Table(name: 'specials')]
#[ORM\Entity(repositoryClass: 'App\Repository\SpecialsRepository')]
class Specials
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'specials_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $specialsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    private $productsId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'specials_new_products_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $specialsNewProductsPrice = '0.0000';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'specials_date_added', type: 'datetime', nullable: true)]
    private $specialsDateAdded;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'specials_last_modified', type: 'datetime', nullable: true)]
    private $specialsLastModified;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'specials_date_started', type: 'datetime', nullable: true)]
    private $specialsDateStarted;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'expires_date', type: 'datetime', nullable: true)]
    private $expiresDate;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_status_change', type: 'datetime', nullable: true)]
    private $dateStatusChange;

    /**
     * @var int
     */
    #[ORM\Column(name: 'status', type: 'integer', nullable: false, options: ['default' => 1])]
    private $status = 1;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'apply_coupon', type: 'integer', nullable: true)]
    private $applyCoupon = '0';

    #[ORM\OneToOne(targetEntity: 'App\Entity\Products', inversedBy: 'specials')]
    #[ORM\JoinColumn(name: 'products_id', referencedColumnName: 'products_id')]
    private $products;

    public function getSpecialsId(): ?int
    {
        return $this->specialsId;
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

    public function getSpecialsNewProductsPrice(): ?string
    {
        return $this->specialsNewProductsPrice;
    }

    public function setSpecialsNewProductsPrice(string $specialsNewProductsPrice): self
    {
        $this->specialsNewProductsPrice = $specialsNewProductsPrice;

        return $this;
    }

    public function getSpecialsDateAdded(): ?\DateTimeInterface
    {
        return $this->specialsDateAdded;
    }

    public function setSpecialsDateAdded(?\DateTimeInterface $specialsDateAdded): self
    {
        $this->specialsDateAdded = $specialsDateAdded;

        return $this;
    }

    public function getSpecialsLastModified(): ?\DateTimeInterface
    {
        return $this->specialsLastModified;
    }

    public function setSpecialsLastModified(?\DateTimeInterface $specialsLastModified): self
    {
        $this->specialsLastModified = $specialsLastModified;

        return $this;
    }

    public function getSpecialsDateStarted(): ?\DateTimeInterface
    {
        return $this->specialsDateStarted;
    }

    public function setSpecialsDateStarted(?\DateTimeInterface $specialsDateStarted): self
    {
        $this->specialsDateStarted = $specialsDateStarted;

        return $this;
    }

    public function getExpiresDate(): ?\DateTimeInterface
    {
        return $this->expiresDate;
    }

    public function setExpiresDate(?\DateTimeInterface $expiresDate): self
    {
        $this->expiresDate = $expiresDate;

        return $this;
    }

    public function getDateStatusChange(): ?\DateTimeInterface
    {
        return $this->dateStatusChange;
    }

    public function setDateStatusChange(?\DateTimeInterface $dateStatusChange): self
    {
        $this->dateStatusChange = $dateStatusChange;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getApplyCoupon(): ?int
    {
        return $this->applyCoupon;
    }

    public function setApplyCoupon(?int $applyCoupon): self
    {
        $this->applyCoupon = $applyCoupon;

        return $this;
    }


}
