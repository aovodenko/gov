<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\GeoZones;

/**
 * TaxRates
 */
#[ORM\Table(name: 'tax_rates')]
#[ORM\Entity(repositoryClass: 'App\Repository\TaxRatesRepository')]
class TaxRates
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'tax_rates_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $taxRatesId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'tax_zone_id', type: 'integer', nullable: false)]
    private $taxZoneId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'tax_class_id', type: 'integer', nullable: false)]
    private $taxClassId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'tax_priority', type: 'integer', nullable: true, options: ['default' => 1])]
    private $taxPriority = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'tax_rate', type: 'decimal', precision: 7, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $taxRate = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'tax_description', type: 'string', length: 255, nullable: false)]
    private $taxDescription;

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

    #[ORM\ManyToOne(targetEntity: 'App\Entity\TaxClass', inversedBy: 'taxRates')]
    #[ORM\JoinColumn(name: 'tax_class_id', referencedColumnName: 'tax_class_id')]
    private $taxClass;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\GeoZones', inversedBy: 'taxRates')]
    #[ORM\JoinColumn(name: 'tax_zone_id', referencedColumnName: 'geo_zone_id')]
    private $geoZones;

    public function getTaxRatesId(): ?int
    {
        return $this->taxRatesId;
    }

    public function getTaxZoneId(): ?int
    {
        return $this->taxZoneId;
    }

    public function setTaxZoneId(int $taxZoneId): self
    {
        $this->taxZoneId = $taxZoneId;

        return $this;
    }

    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }

    public function setTaxClassId(int $taxClassId): self
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    public function getTaxPriority(): ?int
    {
        return $this->taxPriority;
    }

    public function setTaxPriority(?int $taxPriority): self
    {
        $this->taxPriority = $taxPriority;

        return $this;
    }

    public function getTaxRate(): ?string
    {
        return $this->taxRate;
    }

    public function setTaxRate(string $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function getTaxDescription(): ?string
    {
        return $this->taxDescription;
    }

    public function setTaxDescription(string $taxDescription): self
    {
        $this->taxDescription = $taxDescription;

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

    public function getGeoZones(): ?GeoZones
    {
        return $this->geoZones;
    }
}
