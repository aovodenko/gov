<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersStatus
 */
#[ORM\Table(name: 'orders_status')]
#[ORM\Index(name: 'idx_orders_status_name', columns: ['orders_status_name'])]
#[ORM\Entity]
class OrdersStatus
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_status_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $ordersStatusId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'orders_status_name', type: 'string', length: 32, nullable: false)]
    private $ordersStatusName;

    public function getOrdersStatusId(): ?int
    {
        return $this->ordersStatusId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getOrdersStatusName(): ?string
    {
        return $this->ordersStatusName;
    }

    public function setOrdersStatusName(string $ordersStatusName): self
    {
        $this->ordersStatusName = $ordersStatusName;

        return $this;
    }


}
