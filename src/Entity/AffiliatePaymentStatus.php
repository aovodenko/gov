<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliatePaymentStatus
 */
#[ORM\Table(name: 'affiliate_payment_status')]
#[ORM\Index(name: 'idx_affiliate_payment_status_name', columns: ['affiliate_payment_status_name'])]
#[ORM\Entity]
class AffiliatePaymentStatus
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_payment_status_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $affiliatePaymentStatusId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_language_id', type: 'integer', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $affiliateLanguageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_status_name', type: 'string', length: 32, nullable: false)]
    private $affiliatePaymentStatusName;

    public function getAffiliatePaymentStatusId(): ?int
    {
        return $this->affiliatePaymentStatusId;
    }

    public function getAffiliateLanguageId(): ?int
    {
        return $this->affiliateLanguageId;
    }

    public function getAffiliatePaymentStatusName(): ?string
    {
        return $this->affiliatePaymentStatusName;
    }

    public function setAffiliatePaymentStatusName(string $affiliatePaymentStatusName): self
    {
        $this->affiliatePaymentStatusName = $affiliatePaymentStatusName;

        return $this;
    }


}
