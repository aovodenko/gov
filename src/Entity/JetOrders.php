<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JetOrders
 */
#[ORM\Table(name: 'jet_orders')]
#[ORM\Entity]
class JetOrders
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'merchant_order_id', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $merchantOrderId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'buyer_name', type: 'string', length: 255, nullable: true)]
    private $buyerName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'buyer_phone_number', type: 'string', length: 255, nullable: true)]
    private $buyerPhoneNumber;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'hash_email', type: 'string', length: 255, nullable: true)]
    private $hashEmail;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_detail_request_shipping_method', type: 'string', length: 255, nullable: true)]
    private $orderDetailRequestShippingMethod;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_detail_request_shipping_carrier', type: 'string', length: 255, nullable: true)]
    private $orderDetailRequestShippingCarrier;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_detail_request_service_level', type: 'string', length: 255, nullable: true)]
    private $orderDetailRequestServiceLevel;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'order_detail_request_ship_by', type: 'datetime', nullable: true)]
    private $orderDetailRequestShipBy;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'order_detail_request_delivery_by', type: 'datetime', nullable: true)]
    private $orderDetailRequestDeliveryBy;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'order_placed_date', type: 'datetime', nullable: true)]
    private $orderPlacedDate;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'order_totals_item_price_item_tax', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $orderTotalsItemPriceItemTax = 0.00;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'order_totals_item_price_item_shipping_cost', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $orderTotalsItemPriceItemShippingCost = 0.00;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'order_totals_item_price_item_shipping_tax', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $orderTotalsItemPriceItemShippingTax = 0.00;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'order_totals_item_price_base_price', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $orderTotalsItemPriceBasePrice = 0.00;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_transmission_date', type: 'string', length: 255, nullable: true)]
    private $orderTransmissionDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'reference_order_id', type: 'string', length: 255, nullable: true)]
    private $referenceOrderId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_recipient_name', type: 'string', length: 255, nullable: true)]
    private $shippingToRecipientName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_recipient_phone_number', type: 'string', length: 255, nullable: true)]
    private $shippingToRecipientPhoneNumber;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_address_address1', type: 'string', length: 255, nullable: true)]
    private $shippingToAddressAddress1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_address_address2', type: 'string', length: 255, nullable: true)]
    private $shippingToAddressAddress2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_address_city', type: 'string', length: 255, nullable: true)]
    private $shippingToAddressCity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_address_state', type: 'string', length: 255, nullable: true)]
    private $shippingToAddressState;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_to_address_zip_code', type: 'string', length: 255, nullable: true)]
    private $shippingToAddressZipCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'status', type: 'string', length: 32, nullable: true)]
    private $status;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipment_tracking_number', type: 'string', length: 255, nullable: true)]
    private $shipmentTrackingNumber;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'response_shipment_date', type: 'datetime', nullable: true)]
    private $responseShipmentDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'response_shipment_method', type: 'string', length: 255, nullable: true)]
    private $responseShipmentMethod;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'carrier', type: 'string', length: 255, nullable: true)]
    private $carrier;

    public function getMerchantOrderId(): ?string
    {
        return $this->merchantOrderId;
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

    public function getBuyerPhoneNumber(): ?string
    {
        return $this->buyerPhoneNumber;
    }

    public function setBuyerPhoneNumber(?string $buyerPhoneNumber): self
    {
        $this->buyerPhoneNumber = $buyerPhoneNumber;

        return $this;
    }

    public function getHashEmail(): ?string
    {
        return $this->hashEmail;
    }

    public function setHashEmail(?string $hashEmail): self
    {
        $this->hashEmail = $hashEmail;

        return $this;
    }

    public function getOrderDetailRequestShippingMethod(): ?string
    {
        return $this->orderDetailRequestShippingMethod;
    }

    public function setOrderDetailRequestShippingMethod(?string $orderDetailRequestShippingMethod): self
    {
        $this->orderDetailRequestShippingMethod = $orderDetailRequestShippingMethod;

        return $this;
    }

    public function getOrderDetailRequestShippingCarrier(): ?string
    {
        return $this->orderDetailRequestShippingCarrier;
    }

    public function setOrderDetailRequestShippingCarrier(?string $orderDetailRequestShippingCarrier): self
    {
        $this->orderDetailRequestShippingCarrier = $orderDetailRequestShippingCarrier;

        return $this;
    }

    public function getOrderDetailRequestServiceLevel(): ?string
    {
        return $this->orderDetailRequestServiceLevel;
    }

    public function setOrderDetailRequestServiceLevel(?string $orderDetailRequestServiceLevel): self
    {
        $this->orderDetailRequestServiceLevel = $orderDetailRequestServiceLevel;

        return $this;
    }

    public function getOrderDetailRequestShipBy(): ?\DateTimeInterface
    {
        return $this->orderDetailRequestShipBy;
    }

    public function setOrderDetailRequestShipBy(?\DateTimeInterface $orderDetailRequestShipBy): self
    {
        $this->orderDetailRequestShipBy = $orderDetailRequestShipBy;

        return $this;
    }

    public function getOrderDetailRequestDeliveryBy(): ?\DateTimeInterface
    {
        return $this->orderDetailRequestDeliveryBy;
    }

    public function setOrderDetailRequestDeliveryBy(?\DateTimeInterface $orderDetailRequestDeliveryBy): self
    {
        $this->orderDetailRequestDeliveryBy = $orderDetailRequestDeliveryBy;

        return $this;
    }

    public function getOrderPlacedDate(): ?\DateTimeInterface
    {
        return $this->orderPlacedDate;
    }

    public function setOrderPlacedDate(?\DateTimeInterface $orderPlacedDate): self
    {
        $this->orderPlacedDate = $orderPlacedDate;

        return $this;
    }

    public function getOrderTotalsItemPriceItemTax(): ?float
    {
        return $this->orderTotalsItemPriceItemTax;
    }

    public function setOrderTotalsItemPriceItemTax(?float $orderTotalsItemPriceItemTax): self
    {
        $this->orderTotalsItemPriceItemTax = $orderTotalsItemPriceItemTax;

        return $this;
    }

    public function getOrderTotalsItemPriceItemShippingCost(): ?float
    {
        return $this->orderTotalsItemPriceItemShippingCost;
    }

    public function setOrderTotalsItemPriceItemShippingCost(?float $orderTotalsItemPriceItemShippingCost): self
    {
        $this->orderTotalsItemPriceItemShippingCost = $orderTotalsItemPriceItemShippingCost;

        return $this;
    }

    public function getOrderTotalsItemPriceItemShippingTax(): ?float
    {
        return $this->orderTotalsItemPriceItemShippingTax;
    }

    public function setOrderTotalsItemPriceItemShippingTax(?float $orderTotalsItemPriceItemShippingTax): self
    {
        $this->orderTotalsItemPriceItemShippingTax = $orderTotalsItemPriceItemShippingTax;

        return $this;
    }

    public function getOrderTotalsItemPriceBasePrice(): ?float
    {
        return $this->orderTotalsItemPriceBasePrice;
    }

    public function setOrderTotalsItemPriceBasePrice(?float $orderTotalsItemPriceBasePrice): self
    {
        $this->orderTotalsItemPriceBasePrice = $orderTotalsItemPriceBasePrice;

        return $this;
    }

    public function getOrderTransmissionDate(): ?string
    {
        return $this->orderTransmissionDate;
    }

    public function setOrderTransmissionDate(?string $orderTransmissionDate): self
    {
        $this->orderTransmissionDate = $orderTransmissionDate;

        return $this;
    }

    public function getReferenceOrderId(): ?string
    {
        return $this->referenceOrderId;
    }

    public function setReferenceOrderId(?string $referenceOrderId): self
    {
        $this->referenceOrderId = $referenceOrderId;

        return $this;
    }

    public function getShippingToRecipientName(): ?string
    {
        return $this->shippingToRecipientName;
    }

    public function setShippingToRecipientName(?string $shippingToRecipientName): self
    {
        $this->shippingToRecipientName = $shippingToRecipientName;

        return $this;
    }

    public function getShippingToRecipientPhoneNumber(): ?string
    {
        return $this->shippingToRecipientPhoneNumber;
    }

    public function setShippingToRecipientPhoneNumber(?string $shippingToRecipientPhoneNumber): self
    {
        $this->shippingToRecipientPhoneNumber = $shippingToRecipientPhoneNumber;

        return $this;
    }

    public function getShippingToAddressAddress1(): ?string
    {
        return $this->shippingToAddressAddress1;
    }

    public function setShippingToAddressAddress1(?string $shippingToAddressAddress1): self
    {
        $this->shippingToAddressAddress1 = $shippingToAddressAddress1;

        return $this;
    }

    public function getShippingToAddressAddress2(): ?string
    {
        return $this->shippingToAddressAddress2;
    }

    public function setShippingToAddressAddress2(?string $shippingToAddressAddress2): self
    {
        $this->shippingToAddressAddress2 = $shippingToAddressAddress2;

        return $this;
    }

    public function getShippingToAddressCity(): ?string
    {
        return $this->shippingToAddressCity;
    }

    public function setShippingToAddressCity(?string $shippingToAddressCity): self
    {
        $this->shippingToAddressCity = $shippingToAddressCity;

        return $this;
    }

    public function getShippingToAddressState(): ?string
    {
        return $this->shippingToAddressState;
    }

    public function setShippingToAddressState(?string $shippingToAddressState): self
    {
        $this->shippingToAddressState = $shippingToAddressState;

        return $this;
    }

    public function getShippingToAddressZipCode(): ?string
    {
        return $this->shippingToAddressZipCode;
    }

    public function setShippingToAddressZipCode(?string $shippingToAddressZipCode): self
    {
        $this->shippingToAddressZipCode = $shippingToAddressZipCode;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    public function getResponseShipmentDate(): ?\DateTimeInterface
    {
        return $this->responseShipmentDate;
    }

    public function setResponseShipmentDate(?\DateTimeInterface $responseShipmentDate): self
    {
        $this->responseShipmentDate = $responseShipmentDate;

        return $this;
    }

    public function getResponseShipmentMethod(): ?string
    {
        return $this->responseShipmentMethod;
    }

    public function setResponseShipmentMethod(?string $responseShipmentMethod): self
    {
        $this->responseShipmentMethod = $responseShipmentMethod;

        return $this;
    }

    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }


}
