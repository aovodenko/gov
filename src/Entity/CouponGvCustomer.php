<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CouponGvCustomer
 */
#[ORM\Table(name: 'coupon_gv_customer')]
#[ORM\Index(name: 'customer_id', columns: ['customer_id'])]
#[ORM\Entity]
class CouponGvCustomer
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customer_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customerId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'amount', type: 'decimal', precision: 8, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $amount = '0.0000';

    public function getCustomerId(): ?int
    {
        return $this->customerId;
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


}
