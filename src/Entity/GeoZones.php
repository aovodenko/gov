<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * GeoZones
 */
#[ORM\Table(name: 'geo_zones')]
#[ORM\Entity]
class GeoZones
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'geo_zone_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $geoZoneId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'geo_zone_name', type: 'string', length: 32, nullable: false)]
    private $geoZoneName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'geo_zone_description', type: 'string', length: 255, nullable: false)]
    private $geoZoneDescription;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    #[ORM\OneToMany(targetEntity: 'App\Entity\TaxRates', mappedBy: 'geoZones')]
    private $taxRates;

    #[ORM\OneToMany(targetEntity: 'App\Entity\ZonesToGeoZones', mappedBy: 'geoZones')]
    private $zonesToGeoZones;

    public function __construct()
    {
        $this->zonesToGeoZones = new ArrayCollection();
    }

    public function getGeoZoneId(): ?int
    {
        return $this->geoZoneId;
    }

    public function getGeoZoneName(): ?string
    {
        return $this->geoZoneName;
    }

    public function setGeoZoneName(string $geoZoneName): self
    {
        $this->geoZoneName = $geoZoneName;

        return $this;
    }

    public function getGeoZoneDescription(): ?string
    {
        return $this->geoZoneDescription;
    }

    public function setGeoZoneDescription(string $geoZoneDescription): self
    {
        $this->geoZoneDescription = $geoZoneDescription;

        return $this;
    }

    public function getLastModified(): ?\DateTimeInterface
    {
        return $this->lastModified;
    }

    public function setLastModified(?\DateTimeInterface $lastModified): self
    {
        $this->lastModified = $lastModified;

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

    public function getZonesToGeoZones(): ?Collection
    {
        return $this->zonesToGeoZones;
    }
}
