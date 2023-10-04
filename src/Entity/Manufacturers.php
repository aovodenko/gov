<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manufacturers
 */
#[ORM\Table(name: 'manufacturers')]
#[ORM\Index(name: 'IDX_MANUFACTURERS_NAME', columns: ['manufacturers_name'])]
#[ORM\Entity]
class Manufacturers
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'manufacturers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $manufacturersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'manufacturers_name', type: 'string', length: 32, nullable: false)]
    private $manufacturersName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'manufacturers_image', type: 'string', length: 64, nullable: true)]
    private $manufacturersImage;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true)]
    private $dateAdded;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;

    public function getManufacturersId(): ?int
    {
        return $this->manufacturersId;
    }

    public function getManufacturersName(): ?string
    {
        return $this->manufacturersName;
    }

    public function setManufacturersName(string $manufacturersName): self
    {
        $this->manufacturersName = $manufacturersName;

        return $this;
    }

    public function getManufacturersImage(): ?string
    {
        return $this->manufacturersImage;
    }

    public function setManufacturersImage(?string $manufacturersImage): self
    {
        $this->manufacturersImage = $manufacturersImage;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

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


}
