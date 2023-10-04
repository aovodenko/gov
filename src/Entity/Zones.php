<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zones
 */
#[ORM\Table(name: 'zones')]
#[ORM\Entity]
class Zones
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'zone_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $zoneId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'zone_country_id', type: 'integer', nullable: false)]
    private $zoneCountryId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'zone_code', type: 'string', length: 32, nullable: false)]
    private $zoneCode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'zone_name', type: 'string', length: 32, nullable: false)]
    private $zoneName;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'zone_status', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $zoneStatus = true;

    public function getZoneId(): ?int
    {
        return $this->zoneId;
    }

    public function getZoneCountryId(): ?int
    {
        return $this->zoneCountryId;
    }

    public function setZoneCountryId(int $zoneCountryId): self
    {
        $this->zoneCountryId = $zoneCountryId;

        return $this;
    }

    public function getZoneCode(): ?string
    {
        return $this->zoneCode;
    }

    public function setZoneCode(string $zoneCode): self
    {
        $this->zoneCode = $zoneCode;

        return $this;
    }

    public function getZoneName(): ?string
    {
        return $this->zoneName;
    }

    public function setZoneName(string $zoneName): self
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    public function getZoneStatus(): ?bool
    {
        return $this->zoneStatus;
    }

    public function setZoneStatus(bool $zoneStatus): self
    {
        $this->zoneStatus = $zoneStatus;

        return $this;
    }


}
