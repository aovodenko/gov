<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersStatusHistory
 */
#[ORM\Table(name: 'orders_status_history')]
#[ORM\Entity]
class OrdersStatusHistory
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_status_history_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersStatusHistoryId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: true)]
    private $ordersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_status_id', type: 'integer', nullable: false)]
    private $ordersStatusId = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'customer_notified', type: 'integer', nullable: true)]
    private $customerNotified = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'comments', type: 'text', length: 65535, nullable: true)]
    private $comments;

    public function getOrdersStatusHistoryId(): ?int
    {
        return $this->ordersStatusHistoryId;
    }

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
    }

    public function setOrdersId(?string $ordersId): self
    {
        $this->ordersId = $ordersId;

        return $this;
    }

    public function getOrdersStatusId(): ?int
    {
        return $this->ordersStatusId;
    }

    public function setOrdersStatusId(int $ordersStatusId): self
    {
        $this->ordersStatusId = $ordersStatusId;

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

    public function getCustomerNotified(): ?int
    {
        return $this->customerNotified;
    }

    public function setCustomerNotified(?int $customerNotified): self
    {
        $this->customerNotified = $customerNotified;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }


}
