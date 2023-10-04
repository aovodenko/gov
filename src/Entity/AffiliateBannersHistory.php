<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateBannersHistory
 */
#[ORM\Table(name: 'affiliate_banners_history')]
#[ORM\Entity]
class AffiliateBannersHistory
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banners_history_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $affiliateBannersHistoryId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banners_products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $affiliateBannersProductsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banners_id', type: 'integer', nullable: false)]
    private $affiliateBannersId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banners_affiliate_id', type: 'integer', nullable: false)]
    private $affiliateBannersAffiliateId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banners_shown', type: 'integer', nullable: false)]
    private $affiliateBannersShown = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'affiliate_banners_clicks', type: 'boolean', nullable: false)]
    private $affiliateBannersClicks = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_banners_history_date', type: 'date', nullable: false, options: ['default' => '0000-00-00'])]
    private $affiliateBannersHistoryDate = '0000-00-00';

    public function getAffiliateBannersHistoryId(): ?int
    {
        return $this->affiliateBannersHistoryId;
    }

    public function getAffiliateBannersProductsId(): ?int
    {
        return $this->affiliateBannersProductsId;
    }

    public function getAffiliateBannersId(): ?int
    {
        return $this->affiliateBannersId;
    }

    public function setAffiliateBannersId(int $affiliateBannersId): self
    {
        $this->affiliateBannersId = $affiliateBannersId;

        return $this;
    }

    public function getAffiliateBannersAffiliateId(): ?int
    {
        return $this->affiliateBannersAffiliateId;
    }

    public function setAffiliateBannersAffiliateId(int $affiliateBannersAffiliateId): self
    {
        $this->affiliateBannersAffiliateId = $affiliateBannersAffiliateId;

        return $this;
    }

    public function getAffiliateBannersShown(): ?int
    {
        return $this->affiliateBannersShown;
    }

    public function setAffiliateBannersShown(int $affiliateBannersShown): self
    {
        $this->affiliateBannersShown = $affiliateBannersShown;

        return $this;
    }

    public function getAffiliateBannersClicks(): ?bool
    {
        return $this->affiliateBannersClicks;
    }

    public function setAffiliateBannersClicks(bool $affiliateBannersClicks): self
    {
        $this->affiliateBannersClicks = $affiliateBannersClicks;

        return $this;
    }

    public function getAffiliateBannersHistoryDate(): ?\DateTimeInterface
    {
        return $this->affiliateBannersHistoryDate;
    }

    public function setAffiliateBannersHistoryDate(\DateTimeInterface $affiliateBannersHistoryDate): self
    {
        $this->affiliateBannersHistoryDate = $affiliateBannersHistoryDate;

        return $this;
    }


}
