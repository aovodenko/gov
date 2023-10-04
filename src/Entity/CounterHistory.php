<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CounterHistory
 */
#[ORM\Table(name: 'counter_history')]
#[ORM\Entity]
class CounterHistory
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'counter_history_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $counterHistoryId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'month', type: 'string', length: 8, nullable: true, options: ['fixed' => true])]
    private $month;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'counter', type: 'integer', nullable: true)]
    private $counter;

    public function getCounterHistoryId(): ?int
    {
        return $this->counterHistoryId;
    }

    public function getMonth(): ?string
    {
        return $this->month;
    }

    public function setMonth(?string $month): self
    {
        $this->month = $month;

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
