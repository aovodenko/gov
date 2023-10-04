<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliatePayment
 */
#[ORM\Table(name: 'affiliate_payment')]
#[ORM\Entity]
class AffiliatePayment
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_payment_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $affiliatePaymentId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_id', type: 'integer', nullable: false)]
    private $affiliateId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliatePayment = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_tax', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliatePaymentTax = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_total', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliatePaymentTotal = '0.00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_payment_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliatePaymentDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_payment_last_modified', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliatePaymentLastModified = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_payment_status', type: 'integer', nullable: false)]
    private $affiliatePaymentStatus = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_firstname', type: 'string', length: 32, nullable: false)]
    private $affiliateFirstname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_lastname', type: 'string', length: 32, nullable: false)]
    private $affiliateLastname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_street_address', type: 'string', length: 64, nullable: false)]
    private $affiliateStreetAddress;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_suburb', type: 'string', length: 64, nullable: false)]
    private $affiliateSuburb;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_city', type: 'string', length: 32, nullable: false)]
    private $affiliateCity;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_postcode', type: 'string', length: 10, nullable: false)]
    private $affiliatePostcode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_country', type: 'string', length: 32, nullable: false)]
    private $affiliateCountry = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_company', type: 'string', length: 60, nullable: false)]
    private $affiliateCompany;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_state', type: 'string', length: 32, nullable: false)]
    private $affiliateState = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_address_format_id', type: 'integer', nullable: false)]
    private $affiliateAddressFormatId = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_last_modified', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateLastModified = '0000-00-00 00:00:00';

    public function getAffiliatePaymentId(): ?int
    {
        return $this->affiliatePaymentId;
    }

    public function getAffiliateId(): ?int
    {
        return $this->affiliateId;
    }

    public function setAffiliateId(int $affiliateId): self
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    public function getAffiliatePayment(): ?string
    {
        return $this->affiliatePayment;
    }

    public function setAffiliatePayment(string $affiliatePayment): self
    {
        $this->affiliatePayment = $affiliatePayment;

        return $this;
    }

    public function getAffiliatePaymentTax(): ?string
    {
        return $this->affiliatePaymentTax;
    }

    public function setAffiliatePaymentTax(string $affiliatePaymentTax): self
    {
        $this->affiliatePaymentTax = $affiliatePaymentTax;

        return $this;
    }

    public function getAffiliatePaymentTotal(): ?string
    {
        return $this->affiliatePaymentTotal;
    }

    public function setAffiliatePaymentTotal(string $affiliatePaymentTotal): self
    {
        $this->affiliatePaymentTotal = $affiliatePaymentTotal;

        return $this;
    }

    public function getAffiliatePaymentDate(): ?\DateTimeInterface
    {
        return $this->affiliatePaymentDate;
    }

    public function setAffiliatePaymentDate(\DateTimeInterface $affiliatePaymentDate): self
    {
        $this->affiliatePaymentDate = $affiliatePaymentDate;

        return $this;
    }

    public function getAffiliatePaymentLastModified(): ?\DateTimeInterface
    {
        return $this->affiliatePaymentLastModified;
    }

    public function setAffiliatePaymentLastModified(\DateTimeInterface $affiliatePaymentLastModified): self
    {
        $this->affiliatePaymentLastModified = $affiliatePaymentLastModified;

        return $this;
    }

    public function getAffiliatePaymentStatus(): ?int
    {
        return $this->affiliatePaymentStatus;
    }

    public function setAffiliatePaymentStatus(int $affiliatePaymentStatus): self
    {
        $this->affiliatePaymentStatus = $affiliatePaymentStatus;

        return $this;
    }

    public function getAffiliateFirstname(): ?string
    {
        return $this->affiliateFirstname;
    }

    public function setAffiliateFirstname(string $affiliateFirstname): self
    {
        $this->affiliateFirstname = $affiliateFirstname;

        return $this;
    }

    public function getAffiliateLastname(): ?string
    {
        return $this->affiliateLastname;
    }

    public function setAffiliateLastname(string $affiliateLastname): self
    {
        $this->affiliateLastname = $affiliateLastname;

        return $this;
    }

    public function getAffiliateStreetAddress(): ?string
    {
        return $this->affiliateStreetAddress;
    }

    public function setAffiliateStreetAddress(string $affiliateStreetAddress): self
    {
        $this->affiliateStreetAddress = $affiliateStreetAddress;

        return $this;
    }

    public function getAffiliateSuburb(): ?string
    {
        return $this->affiliateSuburb;
    }

    public function setAffiliateSuburb(string $affiliateSuburb): self
    {
        $this->affiliateSuburb = $affiliateSuburb;

        return $this;
    }

    public function getAffiliateCity(): ?string
    {
        return $this->affiliateCity;
    }

    public function setAffiliateCity(string $affiliateCity): self
    {
        $this->affiliateCity = $affiliateCity;

        return $this;
    }

    public function getAffiliatePostcode(): ?string
    {
        return $this->affiliatePostcode;
    }

    public function setAffiliatePostcode(string $affiliatePostcode): self
    {
        $this->affiliatePostcode = $affiliatePostcode;

        return $this;
    }

    public function getAffiliateCountry(): ?string
    {
        return $this->affiliateCountry;
    }

    public function setAffiliateCountry(string $affiliateCountry): self
    {
        $this->affiliateCountry = $affiliateCountry;

        return $this;
    }

    public function getAffiliateCompany(): ?string
    {
        return $this->affiliateCompany;
    }

    public function setAffiliateCompany(string $affiliateCompany): self
    {
        $this->affiliateCompany = $affiliateCompany;

        return $this;
    }

    public function getAffiliateState(): ?string
    {
        return $this->affiliateState;
    }

    public function setAffiliateState(string $affiliateState): self
    {
        $this->affiliateState = $affiliateState;

        return $this;
    }

    public function getAffiliateAddressFormatId(): ?int
    {
        return $this->affiliateAddressFormatId;
    }

    public function setAffiliateAddressFormatId(int $affiliateAddressFormatId): self
    {
        $this->affiliateAddressFormatId = $affiliateAddressFormatId;

        return $this;
    }

    public function getAffiliateLastModified(): ?\DateTimeInterface
    {
        return $this->affiliateLastModified;
    }

    public function setAffiliateLastModified(\DateTimeInterface $affiliateLastModified): self
    {
        $this->affiliateLastModified = $affiliateLastModified;

        return $this;
    }


}
