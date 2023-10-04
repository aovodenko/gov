<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomersPointsPending
 */
#[ORM\Table(name: 'customers_points_pending')]
#[ORM\Entity]
class CustomersPointsPending
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
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: true)]
    private $ordersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'points_pending', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $pointsPending = '0.0000';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'points_comment', type: 'string', length: 200, nullable: true)]
    private $pointsComment;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'points_status', type: 'integer', nullable: false, options: ['default' => 1])]
    private $pointsStatus = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'points_type', type: 'string', length: 2, nullable: false, options: ['default' => 'SP'])]
    private $pointsType = 'SP';

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

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
    }

    public function setOrdersId(?string $ordersId): self
    {
        $this->ordersId = $ordersId;

        return $this;
    }

    public function getPointsPending(): ?string
    {
        return $this->pointsPending;
    }

    public function setPointsPending(string $pointsPending): self
    {
        $this->pointsPending = $pointsPending;

        return $this;
    }

    public function getPointsComment(): ?string
    {
        return $this->pointsComment;
    }

    public function setPointsComment(?string $pointsComment): self
    {
        $this->pointsComment = $pointsComment;

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

    public function getPointsStatus(): ?int
    {
        return $this->pointsStatus;
    }

    public function setPointsStatus(int $pointsStatus): self
    {
        $this->pointsStatus = $pointsStatus;

        return $this;
    }

    public function getPointsType(): ?string
    {
        return $this->pointsType;
    }

    public function setPointsType(string $pointsType): self
    {
        $this->pointsType = $pointsType;

        return $this;
    }


}
