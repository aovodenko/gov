<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoogleOrders
 */
#[ORM\Table(name: 'google_orders')]
#[ORM\Entity]
class GoogleOrders
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'google_order_number', type: 'bigint', nullable: true)]
    private $googleOrderNumber;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_amount', type: 'decimal', precision: 15, scale: 4, nullable: true)]
    private $orderAmount;

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
    }

    public function getGoogleOrderNumber(): ?string
    {
        return $this->googleOrderNumber;
    }

    public function setGoogleOrderNumber(?string $googleOrderNumber): self
    {
        $this->googleOrderNumber = $googleOrderNumber;

        return $this;
    }

    public function getOrderAmount(): ?string
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(?string $orderAmount): self
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }


}
