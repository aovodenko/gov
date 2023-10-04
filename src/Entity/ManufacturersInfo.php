<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ManufacturersInfo
 */
#[ORM\Table(name: 'manufacturers_info')]
#[ORM\Entity]
class ManufacturersInfo
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'manufacturers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $manufacturersId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'languages_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languagesId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'manufacturers_url', type: 'string', length: 255, nullable: false)]
    private $manufacturersUrl;

    /**
     * @var int
     */
    #[ORM\Column(name: 'url_clicked', type: 'integer', nullable: false)]
    private $urlClicked = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_last_click', type: 'datetime', nullable: true)]
    private $dateLastClick;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'manufacturers_htc_title_tag', type: 'string', length: 80, nullable: true)]
    private $manufacturersHtcTitleTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'manufacturers_htc_desc_tag', type: 'text', length: 0, nullable: true)]
    private $manufacturersHtcDescTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'manufacturers_htc_keywords_tag', type: 'text', length: 0, nullable: true)]
    private $manufacturersHtcKeywordsTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'manufacturers_htc_description', type: 'text', length: 0, nullable: true)]
    private $manufacturersHtcDescription;

    public function getManufacturersId(): ?int
    {
        return $this->manufacturersId;
    }

    public function getLanguagesId(): ?int
    {
        return $this->languagesId;
    }

    public function getManufacturersUrl(): ?string
    {
        return $this->manufacturersUrl;
    }

    public function setManufacturersUrl(string $manufacturersUrl): self
    {
        $this->manufacturersUrl = $manufacturersUrl;

        return $this;
    }

    public function getUrlClicked(): ?int
    {
        return $this->urlClicked;
    }

    public function setUrlClicked(int $urlClicked): self
    {
        $this->urlClicked = $urlClicked;

        return $this;
    }

    public function getDateLastClick(): ?\DateTimeInterface
    {
        return $this->dateLastClick;
    }

    public function setDateLastClick(?\DateTimeInterface $dateLastClick): self
    {
        $this->dateLastClick = $dateLastClick;

        return $this;
    }

    public function getManufacturersHtcTitleTag(): ?string
    {
        return $this->manufacturersHtcTitleTag;
    }

    public function setManufacturersHtcTitleTag(?string $manufacturersHtcTitleTag): self
    {
        $this->manufacturersHtcTitleTag = $manufacturersHtcTitleTag;

        return $this;
    }

    public function getManufacturersHtcDescTag(): ?string
    {
        return $this->manufacturersHtcDescTag;
    }

    public function setManufacturersHtcDescTag(?string $manufacturersHtcDescTag): self
    {
        $this->manufacturersHtcDescTag = $manufacturersHtcDescTag;

        return $this;
    }

    public function getManufacturersHtcKeywordsTag(): ?string
    {
        return $this->manufacturersHtcKeywordsTag;
    }

    public function setManufacturersHtcKeywordsTag(?string $manufacturersHtcKeywordsTag): self
    {
        $this->manufacturersHtcKeywordsTag = $manufacturersHtcKeywordsTag;

        return $this;
    }

    public function getManufacturersHtcDescription(): ?string
    {
        return $this->manufacturersHtcDescription;
    }

    public function setManufacturersHtcDescription(?string $manufacturersHtcDescription): self
    {
        $this->manufacturersHtcDescription = $manufacturersHtcDescription;

        return $this;
    }


}
