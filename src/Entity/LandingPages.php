<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LandingPages
 */
#[ORM\Table(name: 'landing_pages')]
#[ORM\Entity]
class LandingPages
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'page_id', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $pageId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'page_query', type: 'text', length: 65535, nullable: true)]
    private $pageQuery;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'crumb_label1', type: 'string', length: 255, nullable: true)]
    private $crumbLabel1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'crumb_link1', type: 'text', length: 65535, nullable: true)]
    private $crumbLink1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'crumb_label2', type: 'string', length: 255, nullable: true)]
    private $crumbLabel2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'crumb_link2', type: 'text', length: 65535, nullable: true)]
    private $crumbLink2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'marketing_crumb', type: 'text', length: 65535, nullable: true)]
    private $marketingCrumb;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'marketing_text', type: 'text', length: 65535, nullable: true)]
    private $marketingText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'header_title', type: 'text', length: 65535, nullable: true)]
    private $headerTitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'header_description', type: 'text', length: 65535, nullable: true)]
    private $headerDescription;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_update', type: 'datetime', nullable: true)]
    private $lastUpdate;

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function getPageQuery(): ?string
    {
        return $this->pageQuery;
    }

    public function setPageQuery(?string $pageQuery): self
    {
        $this->pageQuery = $pageQuery;

        return $this;
    }

    public function getCrumbLabel1(): ?string
    {
        return $this->crumbLabel1;
    }

    public function setCrumbLabel1(?string $crumbLabel1): self
    {
        $this->crumbLabel1 = $crumbLabel1;

        return $this;
    }

    public function getCrumbLink1(): ?string
    {
        return $this->crumbLink1;
    }

    public function setCrumbLink1(?string $crumbLink1): self
    {
        $this->crumbLink1 = $crumbLink1;

        return $this;
    }

    public function getCrumbLabel2(): ?string
    {
        return $this->crumbLabel2;
    }

    public function setCrumbLabel2(?string $crumbLabel2): self
    {
        $this->crumbLabel2 = $crumbLabel2;

        return $this;
    }

    public function getCrumbLink2(): ?string
    {
        return $this->crumbLink2;
    }

    public function setCrumbLink2(?string $crumbLink2): self
    {
        $this->crumbLink2 = $crumbLink2;

        return $this;
    }

    public function getMarketingCrumb(): ?string
    {
        return $this->marketingCrumb;
    }

    public function setMarketingCrumb(?string $marketingCrumb): self
    {
        $this->marketingCrumb = $marketingCrumb;

        return $this;
    }

    public function getMarketingText(): ?string
    {
        return $this->marketingText;
    }

    public function setMarketingText(?string $marketingText): self
    {
        $this->marketingText = $marketingText;

        return $this;
    }

    public function getHeaderTitle(): ?string
    {
        return $this->headerTitle;
    }

    public function setHeaderTitle(?string $headerTitle): self
    {
        $this->headerTitle = $headerTitle;

        return $this;
    }

    public function getHeaderDescription(): ?string
    {
        return $this->headerDescription;
    }

    public function setHeaderDescription(?string $headerDescription): self
    {
        $this->headerDescription = $headerDescription;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(?\DateTimeInterface $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }


}
