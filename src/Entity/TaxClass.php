<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * TaxClass
 */
#[ORM\Table(name: 'tax_class')]
#[ORM\Entity]
class TaxClass
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'tax_class_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $taxClassId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'tax_class_title', type: 'string', length: 32, nullable: false)]
    private $taxClassTitle;

    /**
     * @var string
     */
    #[ORM\Column(name: 'tax_class_description', type: 'string', length: 255, nullable: false)]
    private $taxClassDescription;

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

    #[ORM\OneToMany(targetEntity: 'App\Entity\Products', mappedBy: 'productsTaxClass')]
    private $products;

    #[ORM\OneToMany(targetEntity: 'App\Entity\TaxRates', mappedBy: 'taxClass')]
    private $taxRates;

    public function __construct()
    {
        $this->taxRates = new ArrayCollection();
    }

    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }

    public function getTaxClassTitle(): ?string
    {
        return $this->taxClassTitle;
    }

    public function setTaxClassTitle(string $taxClassTitle): self
    {
        $this->taxClassTitle = $taxClassTitle;

        return $this;
    }

    public function getTaxClassDescription(): ?string
    {
        return $this->taxClassDescription;
    }

    public function setTaxClassDescription(string $taxClassDescription): self
    {
        $this->taxClassDescription = $taxClassDescription;

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

    public function getTaxRates(): ?Collection
    {
        return $this->taxRates;
    }
}
