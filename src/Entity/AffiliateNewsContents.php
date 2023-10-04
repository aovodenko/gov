<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateNewsContents
 */
#[ORM\Table(name: 'affiliate_news_contents')]
#[ORM\Index(name: 'affiliate_news_id', columns: ['affiliate_news_id'])]
#[ORM\Index(name: 'affiliate_news_languages_id', columns: ['affiliate_news_languages_id'])]
#[ORM\Entity]
class AffiliateNewsContents
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_news_contents_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $affiliateNewsContentsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_news_id', type: 'integer', nullable: false)]
    private $affiliateNewsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_news_languages_id', type: 'integer', nullable: false)]
    private $affiliateNewsLanguagesId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_news_headlines', type: 'string', length: 255, nullable: false)]
    private $affiliateNewsHeadlines;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_news_contents', type: 'text', length: 65535, nullable: false)]
    private $affiliateNewsContents;

    public function getAffiliateNewsContentsId(): ?int
    {
        return $this->affiliateNewsContentsId;
    }

    public function getAffiliateNewsId(): ?int
    {
        return $this->affiliateNewsId;
    }

    public function setAffiliateNewsId(int $affiliateNewsId): self
    {
        $this->affiliateNewsId = $affiliateNewsId;

        return $this;
    }

    public function getAffiliateNewsLanguagesId(): ?int
    {
        return $this->affiliateNewsLanguagesId;
    }

    public function setAffiliateNewsLanguagesId(int $affiliateNewsLanguagesId): self
    {
        $this->affiliateNewsLanguagesId = $affiliateNewsLanguagesId;

        return $this;
    }

    public function getAffiliateNewsHeadlines(): ?string
    {
        return $this->affiliateNewsHeadlines;
    }

    public function setAffiliateNewsHeadlines(string $affiliateNewsHeadlines): self
    {
        $this->affiliateNewsHeadlines = $affiliateNewsHeadlines;

        return $this;
    }

    public function getAffiliateNewsContents(): ?string
    {
        return $this->affiliateNewsContents;
    }

    public function setAffiliateNewsContents(string $affiliateNewsContents): self
    {
        $this->affiliateNewsContents = $affiliateNewsContents;

        return $this;
    }


}
