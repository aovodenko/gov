<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CouponRedeemTrack
 */
#[ORM\Table(name: 'coupon_redeem_track')]
#[ORM\Entity]
class CouponRedeemTrack
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'unique_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $uniqueId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'coupon_id', type: 'integer', nullable: false)]
    private $couponId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'customer_id', type: 'integer', nullable: false)]
    private $customerId = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'redeem_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $redeemDate = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'redeem_ip', type: 'string', length: 32, nullable: false)]
    private $redeemIp;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'order_id', type: 'bigint', nullable: true)]
    private $orderId;

    public function getUniqueId(): ?int
    {
        return $this->uniqueId;
    }

    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    public function setCouponId(int $couponId): self
    {
        $this->couponId = $couponId;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getRedeemDate(): ?\DateTimeInterface
    {
        return $this->redeemDate;
    }

    public function setRedeemDate(\DateTimeInterface $redeemDate): self
    {
        $this->redeemDate = $redeemDate;

        return $this;
    }

    public function getRedeemIp(): ?string
    {
        return $this->redeemIp;
    }

    public function setRedeemIp(string $redeemIp): self
    {
        $this->redeemIp = $redeemIp;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }


}
