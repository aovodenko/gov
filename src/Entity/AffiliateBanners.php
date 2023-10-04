<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateBanners
 */
#[ORM\Table(name: 'affiliate_banners')]
#[ORM\Entity]
class AffiliateBanners
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banners_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $affiliateBannersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_banners_title', type: 'string', length: 64, nullable: false)]
    private $affiliateBannersTitle;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_products_id', type: 'integer', nullable: false)]
    private $affiliateProductsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_category_id', type: 'integer', nullable: false)]
    private $affiliateCategoryId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_banners_image', type: 'string', length: 64, nullable: false)]
    private $affiliateBannersImage;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_banners_group', type: 'string', length: 10, nullable: false)]
    private $affiliateBannersGroup;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'affiliate_banners_html_text', type: 'text', length: 65535, nullable: true)]
    private $affiliateBannersHtmlText;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'affiliate_expires_impressions', type: 'integer', nullable: true)]
    private $affiliateExpiresImpressions = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'affiliate_expires_date', type: 'datetime', nullable: true)]
    private $affiliateExpiresDate;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'affiliate_date_scheduled', type: 'datetime', nullable: true)]
    private $affiliateDateScheduled;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDateAdded = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'affiliate_date_status_change', type: 'datetime', nullable: true)]
    private $affiliateDateStatusChange;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_status', type: 'integer', nullable: false, options: ['default' => 1])]
    private $affiliateStatus = 1;

    public function getAffiliateBannersId(): ?int
    {
        return $this->affiliateBannersId;
    }

    public function getAffiliateBannersTitle(): ?string
    {
        return $this->affiliateBannersTitle;
    }

    public function setAffiliateBannersTitle(string $affiliateBannersTitle): self
    {
        $this->affiliateBannersTitle = $affiliateBannersTitle;

        return $this;
    }

    public function getAffiliateProductsId(): ?int
    {
        return $this->affiliateProductsId;
    }

    public function setAffiliateProductsId(int $affiliateProductsId): self
    {
        $this->affiliateProductsId = $affiliateProductsId;

        return $this;
    }

    public function getAffiliateCategoryId(): ?int
    {
        return $this->affiliateCategoryId;
    }

    public function setAffiliateCategoryId(int $affiliateCategoryId): self
    {
        $this->affiliateCategoryId = $affiliateCategoryId;

        return $this;
    }

    public function getAffiliateBannersImage(): ?string
    {
        return $this->affiliateBannersImage;
    }

    public function setAffiliateBannersImage(string $affiliateBannersImage): self
    {
        $this->affiliateBannersImage = $affiliateBannersImage;

        return $this;
    }

    public function getAffiliateBannersGroup(): ?string
    {
        return $this->affiliateBannersGroup;
    }

    public function setAffiliateBannersGroup(string $affiliateBannersGroup): self
    {
        $this->affiliateBannersGroup = $affiliateBannersGroup;

        return $this;
    }

    public function getAffiliateBannersHtmlText(): ?string
    {
        return $this->affiliateBannersHtmlText;
    }

    public function setAffiliateBannersHtmlText(?string $affiliateBannersHtmlText): self
    {
        $this->affiliateBannersHtmlText = $affiliateBannersHtmlText;

        return $this;
    }

    public function getAffiliateExpiresImpressions(): ?int
    {
        return $this->affiliateExpiresImpressions;
    }

    public function setAffiliateExpiresImpressions(?int $affiliateExpiresImpressions): self
    {
        $this->affiliateExpiresImpressions = $affiliateExpiresImpressions;

        return $this;
    }

    public function getAffiliateExpiresDate(): ?\DateTimeInterface
    {
        return $this->affiliateExpiresDate;
    }

    public function setAffiliateExpiresDate(?\DateTimeInterface $affiliateExpiresDate): self
    {
        $this->affiliateExpiresDate = $affiliateExpiresDate;

        return $this;
    }

    public function getAffiliateDateScheduled(): ?\DateTimeInterface
    {
        return $this->affiliateDateScheduled;
    }

    public function setAffiliateDateScheduled(?\DateTimeInterface $affiliateDateScheduled): self
    {
        $this->affiliateDateScheduled = $affiliateDateScheduled;

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

    public function getAffiliateDateStatusChange(): ?\DateTimeInterface
    {
        return $this->affiliateDateStatusChange;
    }

    public function setAffiliateDateStatusChange(?\DateTimeInterface $affiliateDateStatusChange): self
    {
        $this->affiliateDateStatusChange = $affiliateDateStatusChange;

        return $this;
    }

    public function getAffiliateStatus(): ?int
    {
        return $this->affiliateStatus;
    }

    public function setAffiliateStatus(int $affiliateStatus): self
    {
        $this->affiliateStatus = $affiliateStatus;

        return $this;
    }


}
