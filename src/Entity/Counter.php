<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Counter
 */
#[ORM\Table(name: 'counter')]
#[ORM\Entity]
class Counter
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'counter_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $counterId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'startdate', type: 'string', length: 8, nullable: true, options: ['fixed' => true])]
    private $startdate;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'counter', type: 'integer', nullable: true)]
    private $counter;

    public function getCounterId(): ?int
    {
        return $this->counterId;
    }

    public function getStartdate(): ?string
    {
        return $this->startdate;
    }

    public function setStartdate(?string $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getCounter(): ?int
    {
        return $this->counter;
    }

    public function setCounter(?int $counter): self
    {
        $this->counter = $counter;

        return $this;
    }


}
