<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznOrdersItems
 */
#[ORM\Table(name: 'amzn_orders_items')]
#[ORM\Entity]
class AmznOrdersItems
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'amazon_order_id', type: 'string', length: 32, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $amazonOrderId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'order_item_id', type: 'string', length: 32, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $orderItemId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ASIN', type: 'string', length: 32, nullable: true)]
    private $asin;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'seller_SKU', type: 'string', length: 32, nullable: true)]
    private $sellerSku;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: true)]
    private $productsId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'string', length: 512, nullable: true)]
    private $title;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'quantity_ordered', type: 'integer', nullable: true)]
    private $quantityOrdered;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'quantity_shipped', type: 'integer', nullable: true)]
    private $quantityShipped;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'points_granted_points_number', type: 'string', length: 32, nullable: true)]
    private $pointsGrantedPointsNumber;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'points_granted_points_monetary_value_currency_code', type: 'string', length: 32, nullable: true)]
    private $pointsGrantedPointsMonetaryValueCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'points_granted_points_monetary_value_amount', type: 'string', length: 32, nullable: true)]
    private $pointsGrantedPointsMonetaryValueAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'item_price_currency_code', type: 'string', length: 32, nullable: true)]
    private $itemPriceCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'item_price_amount', type: 'string', length: 32, nullable: true)]
    private $itemPriceAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_price_currency_code', type: 'string', length: 32, nullable: true)]
    private $shippingPriceCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_price_amount', type: 'string', length: 32, nullable: true)]
    private $shippingPriceAmount;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'scheduled_delivery_end_date', type: 'datetime', nullable: true)]
    private $scheduledDeliveryEndDate;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'scheduled_delivery_start_date', type: 'datetime', nullable: true)]
    private $scheduledDeliveryStartDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cod_fee_currency_code', type: 'string', length: 32, nullable: true)]
    private $codFeeCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cod_fee_amount', type: 'string', length: 32, nullable: true)]
    private $codFeeAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cod_fee_discount_currency_code', type: 'string', length: 32, nullable: true)]
    private $codFeeDiscountCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cod_fee_discount_amount', type: 'string', length: 32, nullable: true)]
    private $codFeeDiscountAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_message_text', type: 'text', length: 65535, nullable: true)]
    private $giftMessageText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_wrap_price_currency_code', type: 'string', length: 32, nullable: true)]
    private $giftWrapPriceCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_wrap_price_amount', type: 'string', length: 32, nullable: true)]
    private $giftWrapPriceAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_wrap_level', type: 'string', length: 32, nullable: true)]
    private $giftWrapLevel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'price_designation', type: 'string', length: 32, nullable: true)]
    private $priceDesignation;

    public function getAmazonOrderId(): ?string
    {
        return $this->amazonOrderId;
    }

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function getAsin(): ?string
    {
        return $this->asin;
    }

    public function setAsin(?string $asin): self
    {
        $this->asin = $asin;

        return $this;
    }

    public function getSellerSku(): ?string
    {
        return $this->sellerSku;
    }

    public function setSellerSku(?string $sellerSku): self
    {
        $this->sellerSku = $sellerSku;

        return $this;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function setProductsId(?int $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getQuantityOrdered(): ?int
    {
        return $this->quantityOrdered;
    }

    public function setQuantityOrdered(?int $quantityOrdered): self
    {
        $this->quantityOrdered = $quantityOrdered;

        return $this;
    }

    public function getQuantityShipped(): ?int
    {
        return $this->quantityShipped;
    }

    public function setQuantityShipped(?int $quantityShipped): self
    {
        $this->quantityShipped = $quantityShipped;

        return $this;
    }

    public function getPointsGrantedPointsNumber(): ?string
    {
        return $this->pointsGrantedPointsNumber;
    }

    public function setPointsGrantedPointsNumber(?string $pointsGrantedPointsNumber): self
    {
        $this->pointsGrantedPointsNumber = $pointsGrantedPointsNumber;

        return $this;
    }

    public function getPointsGrantedPointsMonetaryValueCurrencyCode(): ?string
    {
        return $this->pointsGrantedPointsMonetaryValueCurrencyCode;
    }

    public function setPointsGrantedPointsMonetaryValueCurrencyCode(?string $pointsGrantedPointsMonetaryValueCurrencyCode): self
    {
        $this->pointsGrantedPointsMonetaryValueCurrencyCode = $pointsGrantedPointsMonetaryValueCurrencyCode;

        return $this;
    }

    public function getPointsGrantedPointsMonetaryValueAmount(): ?string
    {
        return $this->pointsGrantedPointsMonetaryValueAmount;
    }

    public function setPointsGrantedPointsMonetaryValueAmount(?string $pointsGrantedPointsMonetaryValueAmount): self
    {
        $this->pointsGrantedPointsMonetaryValueAmount = $pointsGrantedPointsMonetaryValueAmount;

        return $this;
    }

    public function getItemPriceCurrencyCode(): ?string
    {
        return $this->itemPriceCurrencyCode;
    }

    public function setItemPriceCurrencyCode(?string $itemPriceCurrencyCode): self
    {
        $this->itemPriceCurrencyCode = $itemPriceCurrencyCode;

        return $this;
    }

    public function getItemPriceAmount(): ?string
    {
        return $this->itemPriceAmount;
    }

    public function setItemPriceAmount(?string $itemPriceAmount): self
    {
        $this->itemPriceAmount = $itemPriceAmount;

        return $this;
    }

    public function getShippingPriceCurrencyCode(): ?string
    {
        return $this->shippingPriceCurrencyCode;
    }

    public function setShippingPriceCurrencyCode(?string $shippingPriceCurrencyCode): self
    {
        $this->shippingPriceCurrencyCode = $shippingPriceCurrencyCode;

        return $this;
    }

    public function getShippingPriceAmount(): ?string
    {
        return $this->shippingPriceAmount;
    }

    public function setShippingPriceAmount(?string $shippingPriceAmount): self
    {
        $this->shippingPriceAmount = $shippingPriceAmount;

        return $this;
    }

    public function getScheduledDeliveryEndDate(): ?\DateTimeInterface
    {
        return $this->scheduledDeliveryEndDate;
    }

    public function setScheduledDeliveryEndDate(?\DateTimeInterface $scheduledDeliveryEndDate): self
    {
        $this->scheduledDeliveryEndDate = $scheduledDeliveryEndDate;

        return $this;
    }

    public function getScheduledDeliveryStartDate(): ?\DateTimeInterface
    {
        return $this->scheduledDeliveryStartDate;
    }

    public function setScheduledDeliveryStartDate(?\DateTimeInterface $scheduledDeliveryStartDate): self
    {
        $this->scheduledDeliveryStartDate = $scheduledDeliveryStartDate;

        return $this;
    }

    public function getCodFeeCurrencyCode(): ?string
    {
        return $this->codFeeCurrencyCode;
    }

    public function setCodFeeCurrencyCode(?string $codFeeCurrencyCode): self
    {
        $this->codFeeCurrencyCode = $codFeeCurrencyCode;

        return $this;
    }

    public function getCodFeeAmount(): ?string
    {
        return $this->codFeeAmount;
    }

    public function setCodFeeAmount(?string $codFeeAmount): self
    {
        $this->codFeeAmount = $codFeeAmount;

        return $this;
    }

    public function getCodFeeDiscountCurrencyCode(): ?string
    {
        return $this->codFeeDiscountCurrencyCode;
    }

    public function setCodFeeDiscountCurrencyCode(?string $codFeeDiscountCurrencyCode): self
    {
        $this->codFeeDiscountCurrencyCode = $codFeeDiscountCurrencyCode;

        return $this;
    }

    public function getCodFeeDiscountAmount(): ?string
    {
        return $this->codFeeDiscountAmount;
    }

    public function setCodFeeDiscountAmount(?string $codFeeDiscountAmount): self
    {
        $this->codFeeDiscountAmount = $codFeeDiscountAmount;

        return $this;
    }

    public function getGiftMessageText(): ?string
    {
        return $this->giftMessageText;
    }

    public function setGiftMessageText(?string $giftMessageText): self
    {
        $this->giftMessageText = $giftMessageText;

        return $this;
    }

    public function getGiftWrapPriceCurrencyCode(): ?string
    {
        return $this->giftWrapPriceCurrencyCode;
    }

    public function setGiftWrapPriceCurrencyCode(?string $giftWrapPriceCurrencyCode): self
    {
        $this->giftWrapPriceCurrencyCode = $giftWrapPriceCurrencyCode;

        return $this;
    }

    public function getGiftWrapPriceAmount(): ?string
    {
        return $this->giftWrapPriceAmount;
    }

    public function setGiftWrapPriceAmount(?string $giftWrapPriceAmount): self
    {
        $this->giftWrapPriceAmount = $giftWrapPriceAmount;

        return $this;
    }

    public function getGiftWrapLevel(): ?string
    {
        return $this->giftWrapLevel;
    }

    public function setGiftWrapLevel(?string $giftWrapLevel): self
    {
        $this->giftWrapLevel = $giftWrapLevel;

        return $this;
    }

    public function getPriceDesignation(): ?string
    {
        return $this->priceDesignation;
    }

    public function setPriceDesignation(?string $priceDesignation): self
    {
        $this->priceDesignation = $priceDesignation;

        return $this;
    }


}
