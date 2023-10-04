<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliatePaymentStatusHistory
 */
#[ORM\Table(name: 'affiliate_payment_status_history')]
#[ORM\Entity]
class AffiliatePaymentStatusHistory
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_status_history_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $affiliateStatusHistoryId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_payment_id', type: 'integer', nullable: false)]
    private $affiliatePaymentId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_new_value', type: 'integer', nullable: false)]
    private $affiliateNewValue = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'affiliate_old_value', type: 'integer', nullable: true)]
    private $affiliateOldValue;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDateAdded = '0000-00-00 00:00:00';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'affiliate_notified', type: 'integer', nullable: true)]
    private $affiliateNotified = '0';

    public function getAffiliateStatusHistoryId(): ?int
    {
        return $this->affiliateStatusHistoryId;
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

    public function getAffiliateNewValue(): ?int
    {
        return $this->affiliateNewValue;
    }

    public function setAffiliateNewValue(int $affiliateNewValue): self
    {
        $this->affiliateNewValue = $affiliateNewValue;

        return $this;
    }

    public function getAffiliateOldValue(): ?int
    {
        return $this->affiliateOldValue;
    }

    public function setAffiliateOldValue(?int $affiliateOldValue): self
    {
        $this->affiliateOldValue = $affiliateOldValue;

        return $this;
    }

    public function getAffiliateDateAdded(): ?\DateTimeInterface
    {
        return $this->affiliateDateAdded;
    }

    public function setAffiliateDateAdded(\DateTimeInterface $affiliateDateAdded): self
    {
        $this->affiliateDateAdded = $affiliateDateAdded;

        return $this;
    }

    public function getAffiliateNotified(): ?int
    {
        return $this->affiliateNotified;
    }

    public function setAffiliateNotified(?int $affiliateNotified): self
    {
        $this->affiliateNotified = $affiliateNotified;

        return $this;
    }


}
