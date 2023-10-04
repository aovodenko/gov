<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZonesToGeoZones
 */
#[ORM\Table(name: 'zones_to_geo_zones')]
#[ORM\Entity]
class ZonesToGeoZones
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'association_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $associationId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'zone_country_id', type: 'integer', nullable: false)]
    private $zoneCountryId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'zone_id', type: 'integer', nullable: true)]
    private $zoneId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'geo_zone_id', type: 'integer', nullable: true)]
    private $geoZoneId;

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

    #[ORM\ManyToOne(targetEntity: 'App\Entity\GeoZones', inversedBy: 'zonesToGeoZones')]
    #[ORM\JoinColumn(name: 'geo_zone_id', referencedColumnName: 'geo_zone_id')]
    private $geoZones;

    public function getAssociationId(): ?int
    {
        return $this->associationId;
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

    public function getZoneId(): ?int
    {
        return $this->zoneId;
    }

    public function setZoneId(?int $zoneId): self
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    public function getGeoZoneId(): ?int
    {
        return $this->geoZoneId;
    }

    public function setGeoZoneId(?int $geoZoneId): self
    {
        $this->geoZoneId = $geoZoneId;

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


}
