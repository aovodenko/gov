<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 */
#[ORM\Table(name: 'countries')]
#[ORM\Index(name: 'IDX_COUNTRIES_NAME', columns: ['countries_name'])]
#[ORM\Entity]
class Countries
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'countries_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $countriesId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'countries_name', type: 'string', length: 64, nullable: false)]
    private $countriesName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'countries_iso_code_2', type: 'string', length: 2, nullable: false, options: ['fixed' => true])]
    private $countriesIsoCode2;

    /**
     * @var string
     */
    #[ORM\Column(name: 'countries_iso_code_3', type: 'string', length: 3, nullable: false, options: ['fixed' => true])]
    private $countriesIsoCode3;

    /**
     * @var int
     */
    #[ORM\Column(name: 'address_format_id', type: 'integer', nullable: false)]
    private $addressFormatId = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'countries_status', type: 'boolean', nullable: false)]
    private $countriesStatus = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'countries_pay_status', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $countriesPayStatus = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'countries_ship_status', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $countriesShipStatus = true;

    /**
     * @var int
     */
    #[ORM\Column(name: 'sort_id', type: 'integer', nullable: false, options: ['default' => 9999])]
    private $sortId = 9999;

    /**
     * @var int
     */
    #[ORM\Column(name: 'usps_code', type: 'integer', nullable: false)]
    private $uspsCode = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'postcode_min_length', type: 'integer', nullable: true, options: ['default' => 5])]
    private $postcodeMinLength = 5;

    public function getCountriesId(): ?int
    {
        return $this->countriesId;
    }

    public function getCountriesName(): ?string
    {
        return $this->countriesName;
    }

    public function setCountriesName(string $countriesName): self
    {
        $this->countriesName = $countriesName;

        return $this;
    }

    public function getCountriesIsoCode2(): ?string
    {
        return $this->countriesIsoCode2;
    }

    public function setCountriesIsoCode2(string $countriesIsoCode2): self
    {
        $this->countriesIsoCode2 = $countriesIsoCode2;

        return $this;
    }

    public function getCountriesIsoCode3(): ?string
    {
        return $this->countriesIsoCode3;
    }

    public function setCountriesIsoCode3(string $countriesIsoCode3): self
    {
        $this->countriesIsoCode3 = $countriesIsoCode3;

        return $this;
    }

    public function getAddressFormatId(): ?int
    {
        return $this->addressFormatId;
    }

    public function setAddressFormatId(int $addressFormatId): self
    {
        $this->addressFormatId = $addressFormatId;

        return $this;
    }

    public function getCountriesStatus(): ?bool
    {
        return $this->countriesStatus;
    }

    public function setCountriesStatus(bool $countriesStatus): self
    {
        $this->countriesStatus = $countriesStatus;

        return $this;
    }

    public function getCountriesPayStatus(): ?bool
    {
        return $this->countriesPayStatus;
    }

    public function setCountriesPayStatus(bool $countriesPayStatus): self
    {
        $this->countriesPayStatus = $countriesPayStatus;

        return $this;
    }

    public function getCountriesShipStatus(): ?bool
    {
        return $this->countriesShipStatus;
    }

    public function setCountriesShipStatus(bool $countriesShipStatus): self
    {
        $this->countriesShipStatus = $countriesShipStatus;

        return $this;
    }

    public function getSortId(): ?int
    {
        return $this->sortId;
    }

    public function setSortId(int $sortId): self
    {
        $this->sortId = $sortId;

        return $this;
    }

    public function getUspsCode(): ?int
    {
        return $this->uspsCode;
    }

    public function setUspsCode(int $uspsCode): self
    {
        $this->uspsCode = $uspsCode;

        return $this;
    }

    public function getPostcodeMinLength(): ?int
    {
        return $this->postcodeMinLength;
    }

    public function setPostcodeMinLength(?int $postcodeMinLength): self
    {
        $this->postcodeMinLength = $postcodeMinLength;

        return $this;
    }


}
