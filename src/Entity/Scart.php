<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scart
 */
#[ORM\Table(name: 'scart')]
#[ORM\UniqueConstraint(name: 'customers_id', columns: ['customers_id'])]
#[ORM\UniqueConstraint(name: 'scartid', columns: ['scartid'])]
#[ORM\Entity]
class Scart
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'scartid', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $scartid;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    private $customersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'dateadded', type: 'string', length: 8, nullable: false)]
    private $dateadded;

    /**
     * @var string
     */
    #[ORM\Column(name: 'datemodified', type: 'string', length: 8, nullable: false)]
    private $datemodified;

    public function getScartid(): ?int
    {
        return $this->scartid;
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function setCustomersId(int $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
    }

    public function getDateadded(): ?string
    {
        return $this->dateadded;
    }

    public function setDateadded(string $dateadded): self
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    public function getDatemodified(): ?string
    {
        return $this->datemodified;
    }

    public function setDatemodified(string $datemodified): self
    {
        $this->datemodified = $datemodified;

        return $this;
    }


}
