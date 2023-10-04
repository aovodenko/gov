<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JetReturnsProducts
 */
#[ORM\Table(name: 'jet_returns_products')]
#[ORM\Entity]
class JetReturnsProducts
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
    #[ORM\Column(name: 'merchant_sku', type: 'string', length: 255, nullable: false)]
    private $merchantSku;

    /**
     * @var int
     */
    #[ORM\Column(name: 'return_quantity', type: 'integer', nullable: false)]
    private $returnQuantity;

    public function getMerchantReturnAuthorizationId(): ?string
    {
        return $this->merchantReturnAuthorizationId;
    }

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function getMerchantSku(): ?string
    {
        return $this->merchantSku;
    }

    public function setMerchantSku(string $merchantSku): self
    {
        $this->merchantSku = $merchantSku;

        return $this;
    }

    public function getReturnQuantity(): ?int
    {
        return $this->returnQuantity;
    }

    public function setReturnQuantity(int $returnQuantity): self
    {
        $this->returnQuantity = $returnQuantity;

        return $this;
    }


}
