<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateClickthroughs
 */
#[ORM\Table(name: 'affiliate_clickthroughs')]
#[ORM\Index(name: 'refid', columns: ['affiliate_id'])]
#[ORM\Entity]
class AffiliateClickthroughs
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_clickthrough_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $affiliateClickthroughId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_id', type: 'integer', nullable: false)]
    private $affiliateId = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_clientdate', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateClientdate = '0000-00-00 00:00:00';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'affiliate_clientbrowser', type: 'string', length: 200, nullable: true, options: ['default' => 'Could Not Find This Data'])]
    private $affiliateClientbrowser = 'Could Not Find This Data';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'affiliate_clientip', type: 'string', length: 50, nullable: true, options: ['default' => 'Could Not Find This Data'])]
    private $affiliateClientip = 'Could Not Find This Data';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'affiliate_clientreferer', type: 'string', length: 200, nullable: true, options: ['default' => 'none detected (maybe a direct link)'])]
    private $affiliateClientreferer = 'none detected (maybe a direct link)';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'affiliate_products_id', type: 'integer', nullable: true)]
    private $affiliateProductsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_banner_id', type: 'integer', nullable: false)]
    private $affiliateBannerId = '0';

    public function getAffiliateClickthroughId(): ?int
    {
        return $this->affiliateClickthroughId;
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

    public function getAffiliateClientdate(): ?\DateTimeInterface
    {
        return $this->affiliateClientdate;
    }

    public function setAffiliateClientdate(\DateTimeInterface $affiliateClientdate): self
    {
        $this->affiliateClientdate = $affiliateClientdate;

        return $this;
    }

    public function getAffiliateClientbrowser(): ?string
    {
        return $this->affiliateClientbrowser;
    }

    public function setAffiliateClientbrowser(?string $affiliateClientbrowser): self
    {
        $this->affiliateClientbrowser = $affiliateClientbrowser;

        return $this;
    }

    public function getAffiliateClientip(): ?string
    {
        return $this->affiliateClientip;
    }

    public function setAffiliateClientip(?string $affiliateClientip): self
    {
        $this->affiliateClientip = $affiliateClientip;

        return $this;
    }

    public function getAffiliateClientreferer(): ?string
    {
        return $this->affiliateClientreferer;
    }

    public function setAffiliateClientreferer(?string $affiliateClientreferer): self
    {
        $this->affiliateClientreferer = $affiliateClientreferer;

        return $this;
    }

    public function getAffiliateProductsId(): ?int
    {
        return $this->affiliateProductsId;
    }

    public function setAffiliateProductsId(?int $affiliateProductsId): self
    {
        $this->affiliateProductsId = $affiliateProductsId;

        return $this;
    }

    public function getAffiliateBannerId(): ?int
    {
        return $this->affiliateBannerId;
    }

    public function setAffiliateBannerId(int $affiliateBannerId): self
    {
        $this->affiliateBannerId = $affiliateBannerId;

        return $this;
    }


}
