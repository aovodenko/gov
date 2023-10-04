<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WhosOnline
 */
#[ORM\Table(name: 'whos_online')]
#[ORM\Index(name: 'country_code', columns: ['country_code'])]
#[ORM\Index(name: 'ip_address', columns: ['ip_address'])]
#[ORM\Entity]
class WhosOnline
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customer_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customerId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'full_name', type: 'string', length: 64, nullable: false)]
    private $fullName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'session_id', type: 'string', length: 128, nullable: false)]
    private $sessionId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'ip_address', type: 'string', length: 15, nullable: false)]
    private $ipAddress;

    /**
     * @var string
     */
    #[ORM\Column(name: 'hostname', type: 'string', length: 255, nullable: false)]
    private $hostname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'country_code', type: 'string', length: 2, nullable: false)]
    private $countryCode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'country_name', type: 'string', length: 64, nullable: false)]
    private $countryName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'region_name', type: 'string', length: 64, nullable: false)]
    private $regionName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'city', type: 'string', length: 64, nullable: false)]
    private $city;

    /**
     * @var float
     */
    #[ORM\Column(name: 'latitude', type: 'float', precision: 10, scale: 0, nullable: false)]
    private $latitude;

    /**
     * @var float
     */
    #[ORM\Column(name: 'longitude', type: 'float', precision: 10, scale: 0, nullable: false)]
    private $longitude;

    /**
     * @var string
     */
    #[ORM\Column(name: 'time_entry', type: 'string', length: 14, nullable: false)]
    private $timeEntry;

    /**
     * @var string
     */
    #[ORM\Column(name: 'time_last_click', type: 'string', length: 14, nullable: false)]
    private $timeLastClick;

    /**
     * @var string
     */
    #[ORM\Column(name: 'last_page_url', type: 'string', length: 64, nullable: false)]
    private $lastPageUrl;

    /**
     * @var string
     */
    #[ORM\Column(name: 'http_referer', type: 'string', length: 255, nullable: false)]
    private $httpReferer;

    /**
     * @var string
     */
    #[ORM\Column(name: 'user_agent', type: 'string', length: 255, nullable: false)]
    private $userAgent;

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(string $sessionId): self
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(string $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    public function setRegionName(string $regionName): self
    {
        $this->regionName = $regionName;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getTimeEntry(): ?string
    {
        return $this->timeEntry;
    }

    public function setTimeEntry(string $timeEntry): self
    {
        $this->timeEntry = $timeEntry;

        return $this;
    }

    public function getTimeLastClick(): ?string
    {
        return $this->timeLastClick;
    }

    public function setTimeLastClick(string $timeLastClick): self
    {
        $this->timeLastClick = $timeLastClick;

        return $this;
    }

    public function getLastPageUrl(): ?string
    {
        return $this->lastPageUrl;
    }

    public function setLastPageUrl(string $lastPageUrl): self
    {
        $this->lastPageUrl = $lastPageUrl;

        return $this;
    }

    public function getHttpReferer(): ?string
    {
        return $this->httpReferer;
    }

    public function setHttpReferer(string $httpReferer): self
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }


}
