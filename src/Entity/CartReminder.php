<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartReminder
 */
#[ORM\Table(name: 'cart_reminder')]
#[ORM\Entity]
class CartReminder
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'reminder_id', type: 'integer', nullable: true)]
    private $reminderId = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_modified', type: 'datetime', nullable: true)]
    private $dateModified;

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function getReminderId(): ?int
    {
        return $this->reminderId;
    }

    public function setReminderId(?int $reminderId): self
    {
        $this->reminderId = $reminderId;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(?\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }


}
