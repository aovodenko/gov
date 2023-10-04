<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CouponGvQueue
 */
#[ORM\Table(name: 'coupon_gv_queue')]
#[ORM\Index(name: 'uid', columns: ['unique_id', 'customer_id', 'order_id'])]
#[ORM\Entity]
class CouponGvQueue
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
    #[ORM\Column(name: 'customer_id', type: 'integer', nullable: false)]
    private $customerId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'order_id', type: 'bigint', nullable: true)]
    private $orderId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'amount', type: 'decimal', precision: 8, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $amount = '0.0000';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_card_type', type: 'string', length: 0, nullable: true, options: ['default' => 1])]
    private $giftCardType = '1';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gv_to', type: 'string', length: 255, nullable: true)]
    private $gvTo;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gv_from', type: 'string', length: 255, nullable: true)]
    private $gvFrom;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_created', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateCreated = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'ipaddr', type: 'string', length: 32, nullable: false)]
    private $ipaddr;

    /**
     * @var string
     */
    #[ORM\Column(name: 'release_flag', type: 'string', length: 1, nullable: false, options: ['default' => 'N', 'fixed' => true])]
    private $releaseFlag = 'N';

    public function getUniqueId(): ?int
    {
        return $this->uniqueId;
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

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getGiftCardType(): ?string
    {
        return $this->giftCardType;
    }

    public function setGiftCardType(?string $giftCardType): self
    {
        $this->giftCardType = $giftCardType;

        return $this;
    }

    public function getGvTo(): ?string
    {
        return $this->gvTo;
    }

    public function setGvTo(?string $gvTo): self
    {
        $this->gvTo = $gvTo;

        return $this;
    }

    public function getGvFrom(): ?string
    {
        return $this->gvFrom;
    }

    public function setGvFrom(?string $gvFrom): self
    {
        $this->gvFrom = $gvFrom;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getIpaddr(): ?string
    {
        return $this->ipaddr;
    }

    public function setIpaddr(string $ipaddr): self
    {
        $this->ipaddr = $ipaddr;

        return $this;
    }

    public function getReleaseFlag(): ?string
    {
        return $this->releaseFlag;
    }

    public function setReleaseFlag(string $releaseFlag): self
    {
        $this->releaseFlag = $releaseFlag;

        return $this;
    }


}
