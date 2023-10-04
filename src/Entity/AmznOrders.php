<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznOrders
 */
#[ORM\Table(name: 'amzn_orders')]
#[ORM\UniqueConstraint(name: 'AmazonOrderId', columns: ['amazon_order_id'])]
#[ORM\Entity]
class AmznOrders
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'amazon_order_id', type: 'string', length: 20, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $amazonOrderId = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_total_amount', type: 'string', length: 32, nullable: true)]
    private $orderTotalAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_total_currency_code', type: 'string', length: 32, nullable: true)]
    private $orderTotalCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipment_service_level_category', type: 'string', length: 32, nullable: true)]
    private $shipmentServiceLevelCategory;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'is_business_order', type: 'string', length: 32, nullable: true)]
    private $isBusinessOrder;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ship_service_level', type: 'string', length: 32, nullable: true)]
    private $shipServiceLevel;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'latest_ship_date', type: 'datetime', nullable: true)]
    private $latestShipDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'marketplace_id', type: 'string', length: 32, nullable: true)]
    private $marketplaceId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sales_channel', type: 'string', length: 32, nullable: true)]
    private $salesChannel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_phone', type: 'string', length: 32, nullable: true)]
    private $shippingAddressPhone;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_postal_code', type: 'string', length: 32, nullable: true)]
    private $shippingAddressPostalCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_name', type: 'string', length: 256, nullable: true)]
    private $shippingAddressName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_country_code', type: 'string', length: 32, nullable: true)]
    private $shippingAddressCountryCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_state_or_region', type: 'string', length: 256, nullable: true)]
    private $shippingAddressStateOrRegion;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_address_line1', type: 'string', length: 512, nullable: true)]
    private $shippingAddressAddressLine1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_address_city', type: 'string', length: 32, nullable: true)]
    private $shippingAddressCity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_type', type: 'string', length: 32, nullable: true)]
    private $orderType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'seller_order_id', type: 'string', length: 32, nullable: true)]
    private $sellerOrderId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'fulfillment_channel', type: 'string', length: 32, nullable: true)]
    private $fulfillmentChannel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'buyer_email', type: 'string', length: 256, nullable: true)]
    private $buyerEmail;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_status', type: 'string', length: 32, nullable: true)]
    private $orderStatus;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'buyer_name', type: 'string', length: 256, nullable: true)]
    private $buyerName;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_update_date', type: 'datetime', nullable: true)]
    private $lastUpdateDate;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'earliest_ship_date', type: 'datetime', nullable: true)]
    private $earliestShipDate;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'purchase_date', type: 'datetime', nullable: true)]
    private $purchaseDate;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'number_of_items_unshipped', type: 'integer', nullable: true)]
    private $numberOfItemsUnshipped;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'number_of_items_shipped', type: 'integer', nullable: true)]
    private $numberOfItemsShipped;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'payment_method', type: 'string', length: 32, nullable: true)]
    private $paymentMethod;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'items_processed', type: 'integer', nullable: true)]
    private $itemsProcessed = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'request_feedback', type: 'integer', nullable: true)]
    private $requestFeedback = '0';

    public function getAmazonOrderId(): ?string
    {
        return $this->amazonOrderId;
    }

    public function getOrderTotalAmount(): ?string
    {
        return $this->orderTotalAmount;
    }

    public function setOrderTotalAmount(?string $orderTotalAmount): self
    {
        $this->orderTotalAmount = $orderTotalAmount;

        return $this;
    }

    public function getOrderTotalCurrencyCode(): ?string
    {
        return $this->orderTotalCurrencyCode;
    }

    public function setOrderTotalCurrencyCode(?string $orderTotalCurrencyCode): self
    {
        $this->orderTotalCurrencyCode = $orderTotalCurrencyCode;

        return $this;
    }

    public function getShipmentServiceLevelCategory(): ?string
    {
        return $this->shipmentServiceLevelCategory;
    }

    public function setShipmentServiceLevelCategory(?string $shipmentServiceLevelCategory): self
    {
        $this->shipmentServiceLevelCategory = $shipmentServiceLevelCategory;

        return $this;
    }

    public function getIsBusinessOrder(): ?string
    {
        return $this->isBusinessOrder;
    }

    public function setIsBusinessOrder(?string $isBusinessOrder): self
    {
        $this->isBusinessOrder = $isBusinessOrder;

        return $this;
    }

    public function getShipServiceLevel(): ?string
    {
        return $this->shipServiceLevel;
    }

    public function setShipServiceLevel(?string $shipServiceLevel): self
    {
        $this->shipServiceLevel = $shipServiceLevel;

        return $this;
    }

    public function getLatestShipDate(): ?\DateTimeInterface
    {
        return $this->latestShipDate;
    }

    public function setLatestShipDate(?\DateTimeInterface $latestShipDate): self
    {
        $this->latestShipDate = $latestShipDate;

        return $this;
    }

    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?string $salesChannel): self
    {
        $this->salesChannel = $salesChannel;

        return $this;
    }

    public function getShippingAddressPhone(): ?string
    {
        return $this->shippingAddressPhone;
    }

    public function setShippingAddressPhone(?string $shippingAddressPhone): self
    {
        $this->shippingAddressPhone = $shippingAddressPhone;

        return $this;
    }

    public function getShippingAddressPostalCode(): ?string
    {
        return $this->shippingAddressPostalCode;
    }

    public function setShippingAddressPostalCode(?string $shippingAddressPostalCode): self
    {
        $this->shippingAddressPostalCode = $shippingAddressPostalCode;

        return $this;
    }

    public function getShippingAddressName(): ?string
    {
        return $this->shippingAddressName;
    }

    public function setShippingAddressName(?string $shippingAddressName): self
    {
        $this->shippingAddressName = $shippingAddressName;

        return $this;
    }

    public function getShippingAddressCountryCode(): ?string
    {
        return $this->shippingAddressCountryCode;
    }

    public function setShippingAddressCountryCode(?string $shippingAddressCountryCode): self
    {
        $this->shippingAddressCountryCode = $shippingAddressCountryCode;

        return $this;
    }

    public function getShippingAddressStateOrRegion(): ?string
    {
        return $this->shippingAddressStateOrRegion;
    }

    public function setShippingAddressStateOrRegion(?string $shippingAddressStateOrRegion): self
    {
        $this->shippingAddressStateOrRegion = $shippingAddressStateOrRegion;

        return $this;
    }

    public function getShippingAddressAddressLine1(): ?string
    {
        return $this->shippingAddressAddressLine1;
    }

    public function setShippingAddressAddressLine1(?string $shippingAddressAddressLine1): self
    {
        $this->shippingAddressAddressLine1 = $shippingAddressAddressLine1;

        return $this;
    }

    public function getShippingAddressCity(): ?string
    {
        return $this->shippingAddressCity;
    }

    public function setShippingAddressCity(?string $shippingAddressCity): self
    {
        $this->shippingAddressCity = $shippingAddressCity;

        return $this;
    }

    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    public function setOrderType(?string $orderType): self
    {
        $this->orderType = $orderType;

        return $this;
    }

    public function getSellerOrderId(): ?string
    {
        return $this->sellerOrderId;
    }

    public function setSellerOrderId(?string $sellerOrderId): self
    {
        $this->sellerOrderId = $sellerOrderId;

        return $this;
    }

    public function getFulfillmentChannel(): ?string
    {
        return $this->fulfillmentChannel;
    }

    public function setFulfillmentChannel(?string $fulfillmentChannel): self
    {
        $this->fulfillmentChannel = $fulfillmentChannel;

        return $this;
    }

    public function getBuyerEmail(): ?string
    {
        return $this->buyerEmail;
    }

    public function setBuyerEmail(?string $buyerEmail): self
    {
        $this->buyerEmail = $buyerEmail;

        return $this;
    }

    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(?string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function getBuyerName(): ?string
    {
        return $this->buyerName;
    }

    public function setBuyerName(?string $buyerName): self
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    public function getLastUpdateDate(): ?\DateTimeInterface
    {
        return $this->lastUpdateDate;
    }

    public function setLastUpdateDate(?\DateTimeInterface $lastUpdateDate): self
    {
        $this->lastUpdateDate = $lastUpdateDate;

        return $this;
    }

    public function getEarliestShipDate(): ?\DateTimeInterface
    {
        return $this->earliestShipDate;
    }

    public function setEarliestShipDate(?\DateTimeInterface $earliestShipDate): self
    {
        $this->earliestShipDate = $earliestShipDate;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate(?\DateTimeInterface $purchaseDate): self
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    public function getNumberOfItemsUnshipped(): ?int
    {
        return $this->numberOfItemsUnshipped;
    }

    public function setNumberOfItemsUnshipped(?int $numberOfItemsUnshipped): self
    {
        $this->numberOfItemsUnshipped = $numberOfItemsUnshipped;

        return $this;
    }

    public function getNumberOfItemsShipped(): ?int
    {
        return $this->numberOfItemsShipped;
    }

    public function setNumberOfItemsShipped(?int $numberOfItemsShipped): self
    {
        $this->numberOfItemsShipped = $numberOfItemsShipped;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getItemsProcessed(): ?int
    {
        return $this->itemsProcessed;
    }

    public function setItemsProcessed(?int $itemsProcessed): self
    {
        $this->itemsProcessed = $itemsProcessed;

        return $this;
    }

    public function getRequestFeedback(): ?int
    {
        return $this->requestFeedback;
    }

    public function setRequestFeedback(?int $requestFeedback): self
    {
        $this->requestFeedback = $requestFeedback;

        return $this;
    }


}
