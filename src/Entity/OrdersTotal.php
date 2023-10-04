<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersTotal
 */
#[ORM\Table(name: 'orders_total')]
#[ORM\Index(name: 'idx_orders_total_orders_id', columns: ['orders_id'])]
#[ORM\Entity]
class OrdersTotal
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_total_id', type: 'integer', nullable: false, options: ['unsigned' => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersTotalId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: true)]
    private $ordersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'title', type: 'string', length: 255, nullable: false)]
    private $title;

    /**
     * @var string
     */
    #[ORM\Column(name: 'text', type: 'string', length: 255, nullable: false)]
    private $text;

    /**
     * @var string
     */
    #[ORM\Column(name: 'value', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $value = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'class', type: 'string', length: 32, nullable: false)]
    private $class;

    /**
     * @var int
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: false)]
    private $sortOrder = '0';

    public function getOrdersTotalId(): ?int
    {
        return $this->ordersTotalId;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
