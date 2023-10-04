<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoogleCheckout
 */
#[ORM\Table(name: 'google_checkout')]
#[ORM\Entity]
class GoogleCheckout
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $customersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'buyer_id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $buyerId;

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function getBuyerId(): ?string
    {
        return $this->buyerId;
    }


}
