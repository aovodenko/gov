<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JetOrdersProducts
 */
#[ORM\Table(name: 'jet_orders_products')]
#[ORM\Entity]
class JetOrdersProducts
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'merchant_order_id', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $merchantOrderId;

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
    #[ORM\Column(name: 'request_order_quantity', type: 'integer', nullable: false)]
    private $requestOrderQuantity;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'item_price_item_tax', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $itemPriceItemTax = 0.00;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'item_price_item_shipping_cost', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $itemPriceItemShippingCost = 0.00;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'item_price_item_shipping_tax', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $itemPriceItemShippingTax = 0.00;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'item_price_base_price', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $itemPriceBasePrice = 0.00;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_title', type: 'string', length: 255, nullable: true)]
    private $productTitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'url', type: 'string', length: 255, nullable: true)]
    private $url;

    public function getMerchantOrderId(): ?string
    {
        return $this->merchantOrderId;
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

    public function getRequestOrderQuantity(): ?int
    {
        return $this->requestOrderQuantity;
    }

    public function setRequestOrderQuantity(int $requestOrderQuantity): self
    {
        $this->requestOrderQuantity = $requestOrderQuantity;

        return $this;
    }

    public function getItemPriceItemTax(): ?float
    {
        return $this->itemPriceItemTax;
    }

    public function setItemPriceItemTax(?float $itemPriceItemTax): self
    {
        $this->itemPriceItemTax = $itemPriceItemTax;

        return $this;
    }

    public function getItemPriceItemShippingCost(): ?float
    {
        return $this->itemPriceItemShippingCost;
    }

    public function setItemPriceItemShippingCost(?float $itemPriceItemShippingCost): self
    {
        $this->itemPriceItemShippingCost = $itemPriceItemShippingCost;

        return $this;
    }

    public function getItemPriceItemShippingTax(): ?float
    {
        return $this->itemPriceItemShippingTax;
    }

    public function setItemPriceItemShippingTax(?float $itemPriceItemShippingTax): self
    {
        $this->itemPriceItemShippingTax = $itemPriceItemShippingTax;

        return $this;
    }

    public function getItemPriceBasePrice(): ?float
    {
        return $this->itemPriceBasePrice;
    }

    public function setItemPriceBasePrice(?float $itemPriceBasePrice): self
    {
        $this->itemPriceBasePrice = $itemPriceBasePrice;

        return $this;
    }

    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }


}
