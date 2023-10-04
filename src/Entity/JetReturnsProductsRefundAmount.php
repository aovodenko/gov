<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JetReturnsProductsRefundAmount
 */
#[ORM\Table(name: 'jet_returns_products_refund_amount')]
#[ORM\Entity]
class JetReturnsProductsRefundAmount
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'merchant_return_authorization_id', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $merchantReturnAuthorizationId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'order_item_id', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $orderItemId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'refund_amount_title', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $refundAmountTitle;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'refund_amount_value', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $refundAmountValue = 0.00;

    public function getMerchantReturnAuthorizationId(): ?string
    {
        return $this->merchantReturnAuthorizationId;
    }

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function getRefundAmountTitle(): ?string
    {
        return $this->refundAmountTitle;
    }

    public function getRefundAmountValue(): ?float
    {
        return $this->refundAmountValue;
    }

    public function setRefundAmountValue(?float $refundAmountValue): self
    {
        $this->refundAmountValue = $refundAmountValue;

        return $this;
    }


}
