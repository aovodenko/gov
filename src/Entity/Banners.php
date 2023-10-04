<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banners
 */
#[ORM\Table(name: 'banners')]
#[ORM\Entity]
class Banners
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'banners_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $bannersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'banners_title', type: 'string', length: 64, nullable: false)]
    private $bannersTitle;

    /**
     * @var string
     */
    #[ORM\Column(name: 'banners_url', type: 'string', length: 255, nullable: false)]
    private $bannersUrl;

    /**
     * @var string
     */
    #[ORM\Column(name: 'banners_image', type: 'string', length: 64, nullable: false)]
    private $bannersImage;

    /**
     * @var string
     */
    #[ORM\Column(name: 'banners_group', type: 'string', length: 10, nullable: false)]
    private $bannersGroup;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'banners_html_text', type: 'text', length: 65535, nullable: true)]
    private $bannersHtmlText;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'expires_impressions', type: 'integer', nullable: true)]
    private $expiresImpressions = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'expires_date', type: 'datetime', nullable: true)]
    private $expiresDate;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_scheduled', type: 'datetime', nullable: true)]
    private $dateScheduled;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_status_change', type: 'datetime', nullable: true)]
    private $dateStatusChange;

    /**
     * @var int
     */
    #[ORM\Column(name: 'status', type: 'integer', nullable: false, options: ['default' => 1])]
    private $status = 1;

    public function getBannersId(): ?int
    {
        return $this->bannersId;
    }

    public function getBannersTitle(): ?string
    {
        return $this->bannersTitle;
    }

    public function setBannersTitle(string $bannersTitle): self
    {
        $this->bannersTitle = $bannersTitle;

        return $this;
    }

    public function getBannersUrl(): ?string
    {
        return $this->bannersUrl;
    }

    public function setBannersUrl(string $bannersUrl): self
    {
        $this->bannersUrl = $bannersUrl;

        return $this;
    }

    public function getBannersImage(): ?string
    {
        return $this->bannersImage;
    }

    public function setBannersImage(string $bannersImage): self
    {
        $this->bannersImage = $bannersImage;

        return $this;
    }

    public function getBannersGroup(): ?string
    {
        return $this->bannersGroup;
    }

    public function setBannersGroup(string $bannersGroup): self
    {
        $this->bannersGroup = $bannersGroup;

        return $this;
    }

    public function getBannersHtmlText(): ?string
    {
        return $this->bannersHtmlText;
    }

    public function setBannersHtmlText(?string $bannersHtmlText): self
    {
        $this->bannersHtmlText = $bannersHtmlText;

        return $this;
    }

    public function getExpiresImpressions(): ?int
    {
        return $this->expiresImpressions;
    }

    public function setExpiresImpressions(?int $expiresImpressions): self
    {
        $this->expiresImpressions = $expiresImpressions;

        return $this;
    }

    public function getExpiresDate(): ?\DateTimeInterface
    {
        return $this->expiresDate;
    }

    public function setExpiresDate(?\DateTimeInterface $expiresDate): self
    {
        $this->expiresDate = $expiresDate;

        return $this;
    }

    public function getDateScheduled(): ?\DateTimeInterface
    {
        return $this->dateScheduled;
    }

    public function setDateScheduled(?\DateTimeInterface $dateScheduled): self
    {
        $this->dateScheduled = $dateScheduled;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getDateStatusChange(): ?\DateTimeInterface
    {
        return $this->dateStatusChange;
    }

    public function setDateStatusChange(?\DateTimeInterface $dateStatusChange): self
    {
        $this->dateStatusChange = $dateStatusChange;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
