<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateSales
 */
#[ORM\Table(name: 'affiliate_sales')]
#[ORM\Entity]
class AffiliateSales
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $affiliateId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_orders_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $affiliateOrdersId = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDate = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_browser', type: 'string', length: 100, nullable: false)]
    private $affiliateBrowser;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_ipaddress', type: 'string', length: 20, nullable: false)]
    private $affiliateIpaddress;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_value', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliateValue = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliatePayment = '0.00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_clickthroughs_id', type: 'integer', nullable: false)]
    private $affiliateClickthroughsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_billing_status', type: 'integer', nullable: false)]
    private $affiliateBillingStatus = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_payment_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliatePaymentDate = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_payment_id', type: 'integer', nullable: false)]
    private $affiliatePaymentId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_percent', type: 'decimal', precision: 4, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliatePercent = '0.00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_salesman', type: 'integer', nullable: false)]
    private $affiliateSalesman = '0';

    public function getAffiliateId(): ?int
    {
        return $this->affiliateId;
    }

    public function getAffiliateOrdersId(): ?int
    {
        return $this->affiliateOrdersId;
    }

    public function getAffiliateDate(): ?\DateTimeInterface
    {
        return $this->affiliateDate;
    }

    public function setAffiliateDate(\DateTimeInterface $affiliateDate): self
    {
        $this->affiliateDate = $affiliateDate;

        return $this;
    }

    public function getAffiliateBrowser(): ?string
    {
        return $this->affiliateBrowser;
    }

    public function setAffiliateBrowser(string $affiliateBrowser): self
    {
        $this->affiliateBrowser = $affiliateBrowser;

        return $this;
    }

    public function getAffiliateIpaddress(): ?string
    {
        return $this->affiliateIpaddress;
    }

    public function setAffiliateIpaddress(string $affiliateIpaddress): self
    {
        $this->affiliateIpaddress = $affiliateIpaddress;

        return $this;
    }

    public function getAffiliateValue(): ?string
    {
        return $this->affiliateValue;
    }

    public function setAffiliateValue(string $affiliateValue): self
    {
        $this->affiliateValue = $affiliateValue;

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

    public function getAffiliateClickthroughsId(): ?int
    {
        return $this->affiliateClickthroughsId;
    }

    public function setAffiliateClickthroughsId(int $affiliateClickthroughsId): self
    {
        $this->affiliateClickthroughsId = $affiliateClickthroughsId;

        return $this;
    }

    public function getAffiliateBillingStatus(): ?int
    {
        return $this->affiliateBillingStatus;
    }

    public function setAffiliateBillingStatus(int $affiliateBillingStatus): self
    {
        $this->affiliateBillingStatus = $affiliateBillingStatus;

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

    public function getAffiliatePaymentId(): ?int
    {
        return $this->affiliatePaymentId;
    }

    public function setAffiliatePaymentId(int $affiliatePaymentId): self
    {
        $this->affiliatePaymentId = $affiliatePaymentId;

        return $this;
    }

    public function getAffiliatePercent(): ?string
    {
        return $this->affiliatePercent;
    }

    public function setAffiliatePercent(string $affiliatePercent): self
    {
        $this->affiliatePercent = $affiliatePercent;

        return $this;
    }

    public function getAffiliateSalesman(): ?int
    {
        return $this->affiliateSalesman;
    }

    public function setAffiliateSalesman(int $affiliateSalesman): self
    {
        $this->affiliateSalesman = $affiliateSalesman;

        return $this;
    }


}
