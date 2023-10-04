<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MageOrders
 */
#[ORM\Table(name: 'mage_orders')]
#[ORM\Entity]
class MageOrders
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'order_id', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $orderId = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'email', type: 'string', length: 255, nullable: true)]
    private $email;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'firstname', type: 'string', length: 255, nullable: true)]
    private $firstname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'lastname', type: 'string', length: 255, nullable: true)]
    private $lastname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'prefix', type: 'string', length: 255, nullable: true)]
    private $prefix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'middlename', type: 'string', length: 255, nullable: true)]
    private $middlename;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'suffix', type: 'string', length: 255, nullable: true)]
    private $suffix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'taxvat', type: 'string', length: 255, nullable: true)]
    private $taxvat;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: true)]
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: true)]
    private $updatedAt;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'invoice_created_at', type: 'datetime', nullable: true)]
    private $invoiceCreatedAt;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'shipment_created_at', type: 'datetime', nullable: true)]
    private $shipmentCreatedAt;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'creditmemo_created_at', type: 'datetime', nullable: true)]
    private $creditmemoCreatedAt;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $taxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'discount_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $discountAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_discount_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseDiscountAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $shippingTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_shipping_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseShippingTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_to_global_rate', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseToGlobalRate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_to_order_rate', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseToOrderRate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'store_to_base_rate', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $storeToBaseRate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'store_to_order_rate', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $storeToOrderRate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'subtotal_incl_tax', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $subtotalInclTax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_subtotal_incl_tax', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseSubtotalInclTax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coupon_code', type: 'string', length: 255, nullable: true)]
    private $couponCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_incl_tax', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $shippingInclTax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_shipping_incl_tax', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseShippingInclTax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_method', type: 'string', length: 255, nullable: true)]
    private $shippingMethod;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_description', type: 'text', length: 65535, nullable: true)]
    private $shippingDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $shippingAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'subtotal', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $subtotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_subtotal', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseSubtotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'grand_total', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $grandTotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_grand_total', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseGrandTotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_shipping_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseShippingAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'adjustment_positive', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $adjustmentPositive;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'adjustment_negative', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $adjustmentNegative;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'refunded_shipping_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $refundedShippingAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_refunded_shipping_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseRefundedShippingAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'refunded_subtotal', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $refundedSubtotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_refunded_subtotal', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseRefundedSubtotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'refunded_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $refundedTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_refunded_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseRefundedTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'refunded_discount_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $refundedDiscountAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_refunded_discount_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseRefundedDiscountAmount;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'store_id', type: 'integer', nullable: true)]
    private $storeId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_status', type: 'string', length: 255, nullable: true)]
    private $orderStatus;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_state', type: 'string', length: 255, nullable: true)]
    private $orderState;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'hold_before_state', type: 'string', length: 255, nullable: true)]
    private $holdBeforeState;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'hold_before_status', type: 'string', length: 255, nullable: true)]
    private $holdBeforeStatus;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'store_currency_code', type: 'string', length: 255, nullable: true)]
    private $storeCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_currency_code', type: 'string', length: 255, nullable: true)]
    private $baseCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_currency_code', type: 'string', length: 255, nullable: true)]
    private $orderCurrencyCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'total_paid', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $totalPaid;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_total_paid', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseTotalPaid;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'is_virtual', type: 'integer', nullable: true)]
    private $isVirtual;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'total_qty_ordered', type: 'integer', nullable: true)]
    private $totalQtyOrdered;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'remote_ip', type: 'string', length: 255, nullable: true)]
    private $remoteIp;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'total_refunded', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $totalRefunded;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_total_refunded', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseTotalRefunded;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'total_canceled', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $totalCanceled;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'total_invoiced', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $totalInvoiced;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'customer_id', type: 'integer', nullable: true)]
    private $customerId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_prefix', type: 'string', length: 255, nullable: true)]
    private $billingPrefix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_firstname', type: 'string', length: 255, nullable: true)]
    private $billingFirstname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_middlename', type: 'string', length: 255, nullable: true)]
    private $billingMiddlename;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_lastname', type: 'string', length: 255, nullable: true)]
    private $billingLastname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_suffix', type: 'string', length: 255, nullable: true)]
    private $billingSuffix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_street_full', type: 'string', length: 255, nullable: true)]
    private $billingStreetFull;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_city', type: 'string', length: 255, nullable: true)]
    private $billingCity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_region', type: 'string', length: 255, nullable: true)]
    private $billingRegion;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_country', type: 'string', length: 255, nullable: true)]
    private $billingCountry;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_postcode', type: 'string', length: 255, nullable: true)]
    private $billingPostcode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_telephone', type: 'string', length: 255, nullable: true)]
    private $billingTelephone;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_company', type: 'string', length: 255, nullable: true)]
    private $billingCompany;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_fax', type: 'string', length: 255, nullable: true)]
    private $billingFax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_prefix', type: 'string', length: 255, nullable: true)]
    private $shippingPrefix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_firstname', type: 'string', length: 255, nullable: true)]
    private $shippingFirstname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_middlename', type: 'string', length: 255, nullable: true)]
    private $shippingMiddlename;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_lastname', type: 'string', length: 255, nullable: true)]
    private $shippingLastname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_suffix', type: 'string', length: 255, nullable: true)]
    private $shippingSuffix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_street_full', type: 'string', length: 255, nullable: true)]
    private $shippingStreetFull;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_city', type: 'string', length: 255, nullable: true)]
    private $shippingCity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_region', type: 'string', length: 255, nullable: true)]
    private $shippingRegion;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_country', type: 'string', length: 255, nullable: true)]
    private $shippingCountry;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_postcode', type: 'string', length: 255, nullable: true)]
    private $shippingPostcode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_telephone', type: 'string', length: 255, nullable: true)]
    private $shippingTelephone;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_company', type: 'string', length: 255, nullable: true)]
    private $shippingCompany;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_fax', type: 'string', length: 255, nullable: true)]
    private $shippingFax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'payment_method', type: 'string', length: 255, nullable: true)]
    private $paymentMethod;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cctype', type: 'string', length: 255, nullable: true)]
    private $cctype;

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getTaxvat(): ?string
    {
        return $this->taxvat;
    }

    public function setTaxvat(?string $taxvat): self
    {
        $this->taxvat = $taxvat;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getInvoiceCreatedAt(): ?\DateTimeInterface
    {
        return $this->invoiceCreatedAt;
    }

    public function setInvoiceCreatedAt(?\DateTimeInterface $invoiceCreatedAt): self
    {
        $this->invoiceCreatedAt = $invoiceCreatedAt;

        return $this;
    }

    public function getShipmentCreatedAt(): ?\DateTimeInterface
    {
        return $this->shipmentCreatedAt;
    }

    public function setShipmentCreatedAt(?\DateTimeInterface $shipmentCreatedAt): self
    {
        $this->shipmentCreatedAt = $shipmentCreatedAt;

        return $this;
    }

    public function getCreditmemoCreatedAt(): ?\DateTimeInterface
    {
        return $this->creditmemoCreatedAt;
    }

    public function setCreditmemoCreatedAt(?\DateTimeInterface $creditmemoCreatedAt): self
    {
        $this->creditmemoCreatedAt = $creditmemoCreatedAt;

        return $this;
    }

    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    public function setTaxAmount(?string $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    public function getBaseTaxAmount(): ?string
    {
        return $this->baseTaxAmount;
    }

    public function setBaseTaxAmount(?string $baseTaxAmount): self
    {
        $this->baseTaxAmount = $baseTaxAmount;

        return $this;
    }

    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(?string $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getBaseDiscountAmount(): ?string
    {
        return $this->baseDiscountAmount;
    }

    public function setBaseDiscountAmount(?string $baseDiscountAmount): self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;

        return $this;
    }

    public function getShippingTaxAmount(): ?string
    {
        return $this->shippingTaxAmount;
    }

    public function setShippingTaxAmount(?string $shippingTaxAmount): self
    {
        $this->shippingTaxAmount = $shippingTaxAmount;

        return $this;
    }

    public function getBaseShippingTaxAmount(): ?string
    {
        return $this->baseShippingTaxAmount;
    }

    public function setBaseShippingTaxAmount(?string $baseShippingTaxAmount): self
    {
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;

        return $this;
    }

    public function getBaseToGlobalRate(): ?string
    {
        return $this->baseToGlobalRate;
    }

    public function setBaseToGlobalRate(?string $baseToGlobalRate): self
    {
        $this->baseToGlobalRate = $baseToGlobalRate;

        return $this;
    }

    public function getBaseToOrderRate(): ?string
    {
        return $this->baseToOrderRate;
    }

    public function setBaseToOrderRate(?string $baseToOrderRate): self
    {
        $this->baseToOrderRate = $baseToOrderRate;

        return $this;
    }

    public function getStoreToBaseRate(): ?string
    {
        return $this->storeToBaseRate;
    }

    public function setStoreToBaseRate(?string $storeToBaseRate): self
    {
        $this->storeToBaseRate = $storeToBaseRate;

        return $this;
    }

    public function getStoreToOrderRate(): ?string
    {
        return $this->storeToOrderRate;
    }

    public function setStoreToOrderRate(?string $storeToOrderRate): self
    {
        $this->storeToOrderRate = $storeToOrderRate;

        return $this;
    }

    public function getSubtotalInclTax(): ?string
    {
        return $this->subtotalInclTax;
    }

    public function setSubtotalInclTax(?string $subtotalInclTax): self
    {
        $this->subtotalInclTax = $subtotalInclTax;

        return $this;
    }

    public function getBaseSubtotalInclTax(): ?string
    {
        return $this->baseSubtotalInclTax;
    }

    public function setBaseSubtotalInclTax(?string $baseSubtotalInclTax): self
    {
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;

        return $this;
    }

    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }

    public function setCouponCode(?string $couponCode): self
    {
        $this->couponCode = $couponCode;

        return $this;
    }

    public function getShippingInclTax(): ?string
    {
        return $this->shippingInclTax;
    }

    public function setShippingInclTax(?string $shippingInclTax): self
    {
        $this->shippingInclTax = $shippingInclTax;

        return $this;
    }

    public function getBaseShippingInclTax(): ?string
    {
        return $this->baseShippingInclTax;
    }

    public function setBaseShippingInclTax(?string $baseShippingInclTax): self
    {
        $this->baseShippingInclTax = $baseShippingInclTax;

        return $this;
    }

    public function getShippingMethod(): ?string
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(?string $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    public function getShippingDescription(): ?string
    {
        return $this->shippingDescription;
    }

    public function setShippingDescription(?string $shippingDescription): self
    {
        $this->shippingDescription = $shippingDescription;

        return $this;
    }

    public function getShippingAmount(): ?string
    {
        return $this->shippingAmount;
    }

    public function setShippingAmount(?string $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    public function getSubtotal(): ?string
    {
        return $this->subtotal;
    }

    public function setSubtotal(?string $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    public function getBaseSubtotal(): ?string
    {
        return $this->baseSubtotal;
    }

    public function setBaseSubtotal(?string $baseSubtotal): self
    {
        $this->baseSubtotal = $baseSubtotal;

        return $this;
    }

    public function getGrandTotal(): ?string
    {
        return $this->grandTotal;
    }

    public function setGrandTotal(?string $grandTotal): self
    {
        $this->grandTotal = $grandTotal;

        return $this;
    }

    public function getBaseGrandTotal(): ?string
    {
        return $this->baseGrandTotal;
    }

    public function setBaseGrandTotal(?string $baseGrandTotal): self
    {
        $this->baseGrandTotal = $baseGrandTotal;

        return $this;
    }

    public function getBaseShippingAmount(): ?string
    {
        return $this->baseShippingAmount;
    }

    public function setBaseShippingAmount(?string $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;

        return $this;
    }

    public function getAdjustmentPositive(): ?string
    {
        return $this->adjustmentPositive;
    }

    public function setAdjustmentPositive(?string $adjustmentPositive): self
    {
        $this->adjustmentPositive = $adjustmentPositive;

        return $this;
    }

    public function getAdjustmentNegative(): ?string
    {
        return $this->adjustmentNegative;
    }

    public function setAdjustmentNegative(?string $adjustmentNegative): self
    {
        $this->adjustmentNegative = $adjustmentNegative;

        return $this;
    }

    public function getRefundedShippingAmount(): ?string
    {
        return $this->refundedShippingAmount;
    }

    public function setRefundedShippingAmount(?string $refundedShippingAmount): self
    {
        $this->refundedShippingAmount = $refundedShippingAmount;

        return $this;
    }

    public function getBaseRefundedShippingAmount(): ?string
    {
        return $this->baseRefundedShippingAmount;
    }

    public function setBaseRefundedShippingAmount(?string $baseRefundedShippingAmount): self
    {
        $this->baseRefundedShippingAmount = $baseRefundedShippingAmount;

        return $this;
    }

    public function getRefundedSubtotal(): ?string
    {
        return $this->refundedSubtotal;
    }

    public function setRefundedSubtotal(?string $refundedSubtotal): self
    {
        $this->refundedSubtotal = $refundedSubtotal;

        return $this;
    }

    public function getBaseRefundedSubtotal(): ?string
    {
        return $this->baseRefundedSubtotal;
    }

    public function setBaseRefundedSubtotal(?string $baseRefundedSubtotal): self
    {
        $this->baseRefundedSubtotal = $baseRefundedSubtotal;

        return $this;
    }

    public function getRefundedTaxAmount(): ?string
    {
        return $this->refundedTaxAmount;
    }

    public function setRefundedTaxAmount(?string $refundedTaxAmount): self
    {
        $this->refundedTaxAmount = $refundedTaxAmount;

        return $this;
    }

    public function getBaseRefundedTaxAmount(): ?string
    {
        return $this->baseRefundedTaxAmount;
    }

    public function setBaseRefundedTaxAmount(?string $baseRefundedTaxAmount): self
    {
        $this->baseRefundedTaxAmount = $baseRefundedTaxAmount;

        return $this;
    }

    public function getRefundedDiscountAmount(): ?string
    {
        return $this->refundedDiscountAmount;
    }

    public function setRefundedDiscountAmount(?string $refundedDiscountAmount): self
    {
        $this->refundedDiscountAmount = $refundedDiscountAmount;

        return $this;
    }

    public function getBaseRefundedDiscountAmount(): ?string
    {
        return $this->baseRefundedDiscountAmount;
    }

    public function setBaseRefundedDiscountAmount(?string $baseRefundedDiscountAmount): self
    {
        $this->baseRefundedDiscountAmount = $baseRefundedDiscountAmount;

        return $this;
    }

    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;

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

    public function getOrderState(): ?string
    {
        return $this->orderState;
    }

    public function setOrderState(?string $orderState): self
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function getHoldBeforeState(): ?string
    {
        return $this->holdBeforeState;
    }

    public function setHoldBeforeState(?string $holdBeforeState): self
    {
        $this->holdBeforeState = $holdBeforeState;

        return $this;
    }

    public function getHoldBeforeStatus(): ?string
    {
        return $this->holdBeforeStatus;
    }

    public function setHoldBeforeStatus(?string $holdBeforeStatus): self
    {
        $this->holdBeforeStatus = $holdBeforeStatus;

        return $this;
    }

    public function getStoreCurrencyCode(): ?string
    {
        return $this->storeCurrencyCode;
    }

    public function setStoreCurrencyCode(?string $storeCurrencyCode): self
    {
        $this->storeCurrencyCode = $storeCurrencyCode;

        return $this;
    }

    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }

    public function setBaseCurrencyCode(?string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;

        return $this;
    }

    public function getOrderCurrencyCode(): ?string
    {
        return $this->orderCurrencyCode;
    }

    public function setOrderCurrencyCode(?string $orderCurrencyCode): self
    {
        $this->orderCurrencyCode = $orderCurrencyCode;

        return $this;
    }

    public function getTotalPaid(): ?string
    {
        return $this->totalPaid;
    }

    public function setTotalPaid(?string $totalPaid): self
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    public function getBaseTotalPaid(): ?string
    {
        return $this->baseTotalPaid;
    }

    public function setBaseTotalPaid(?string $baseTotalPaid): self
    {
        $this->baseTotalPaid = $baseTotalPaid;

        return $this;
    }

    public function getIsVirtual(): ?int
    {
        return $this->isVirtual;
    }

    public function setIsVirtual(?int $isVirtual): self
    {
        $this->isVirtual = $isVirtual;

        return $this;
    }

    public function getTotalQtyOrdered(): ?int
    {
        return $this->totalQtyOrdered;
    }

    public function setTotalQtyOrdered(?int $totalQtyOrdered): self
    {
        $this->totalQtyOrdered = $totalQtyOrdered;

        return $this;
    }

    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }

    public function setRemoteIp(?string $remoteIp): self
    {
        $this->remoteIp = $remoteIp;

        return $this;
    }

    public function getTotalRefunded(): ?string
    {
        return $this->totalRefunded;
    }

    public function setTotalRefunded(?string $totalRefunded): self
    {
        $this->totalRefunded = $totalRefunded;

        return $this;
    }

    public function getBaseTotalRefunded(): ?string
    {
        return $this->baseTotalRefunded;
    }

    public function setBaseTotalRefunded(?string $baseTotalRefunded): self
    {
        $this->baseTotalRefunded = $baseTotalRefunded;

        return $this;
    }

    public function getTotalCanceled(): ?string
    {
        return $this->totalCanceled;
    }

    public function setTotalCanceled(?string $totalCanceled): self
    {
        $this->totalCanceled = $totalCanceled;

        return $this;
    }

    public function getTotalInvoiced(): ?string
    {
        return $this->totalInvoiced;
    }

    public function setTotalInvoiced(?string $totalInvoiced): self
    {
        $this->totalInvoiced = $totalInvoiced;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getBillingPrefix(): ?string
    {
        return $this->billingPrefix;
    }

    public function setBillingPrefix(?string $billingPrefix): self
    {
        $this->billingPrefix = $billingPrefix;

        return $this;
    }

    public function getBillingFirstname(): ?string
    {
        return $this->billingFirstname;
    }

    public function setBillingFirstname(?string $billingFirstname): self
    {
        $this->billingFirstname = $billingFirstname;

        return $this;
    }

    public function getBillingMiddlename(): ?string
    {
        return $this->billingMiddlename;
    }

    public function setBillingMiddlename(?string $billingMiddlename): self
    {
        $this->billingMiddlename = $billingMiddlename;

        return $this;
    }

    public function getBillingLastname(): ?string
    {
        return $this->billingLastname;
    }

    public function setBillingLastname(?string $billingLastname): self
    {
        $this->billingLastname = $billingLastname;

        return $this;
    }

    public function getBillingSuffix(): ?string
    {
        return $this->billingSuffix;
    }

    public function setBillingSuffix(?string $billingSuffix): self
    {
        $this->billingSuffix = $billingSuffix;

        return $this;
    }

    public function getBillingStreetFull(): ?string
    {
        return $this->billingStreetFull;
    }

    public function setBillingStreetFull(?string $billingStreetFull): self
    {
        $this->billingStreetFull = $billingStreetFull;

        return $this;
    }

    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    public function setBillingCity(?string $billingCity): self
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    public function getBillingRegion(): ?string
    {
        return $this->billingRegion;
    }

    public function setBillingRegion(?string $billingRegion): self
    {
        $this->billingRegion = $billingRegion;

        return $this;
    }

    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    public function setBillingCountry(?string $billingCountry): self
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    public function getBillingPostcode(): ?string
    {
        return $this->billingPostcode;
    }

    public function setBillingPostcode(?string $billingPostcode): self
    {
        $this->billingPostcode = $billingPostcode;

        return $this;
    }

    public function getBillingTelephone(): ?string
    {
        return $this->billingTelephone;
    }

    public function setBillingTelephone(?string $billingTelephone): self
    {
        $this->billingTelephone = $billingTelephone;

        return $this;
    }

    public function getBillingCompany(): ?string
    {
        return $this->billingCompany;
    }

    public function setBillingCompany(?string $billingCompany): self
    {
        $this->billingCompany = $billingCompany;

        return $this;
    }

    public function getBillingFax(): ?string
    {
        return $this->billingFax;
    }

    public function setBillingFax(?string $billingFax): self
    {
        $this->billingFax = $billingFax;

        return $this;
    }

    public function getShippingPrefix(): ?string
    {
        return $this->shippingPrefix;
    }

    public function setShippingPrefix(?string $shippingPrefix): self
    {
        $this->shippingPrefix = $shippingPrefix;

        return $this;
    }

    public function getShippingFirstname(): ?string
    {
        return $this->shippingFirstname;
    }

    public function setShippingFirstname(?string $shippingFirstname): self
    {
        $this->shippingFirstname = $shippingFirstname;

        return $this;
    }

    public function getShippingMiddlename(): ?string
    {
        return $this->shippingMiddlename;
    }

    public function setShippingMiddlename(?string $shippingMiddlename): self
    {
        $this->shippingMiddlename = $shippingMiddlename;

        return $this;
    }

    public function getShippingLastname(): ?string
    {
        return $this->shippingLastname;
    }

    public function setShippingLastname(?string $shippingLastname): self
    {
        $this->shippingLastname = $shippingLastname;

        return $this;
    }

    public function getShippingSuffix(): ?string
    {
        return $this->shippingSuffix;
    }

    public function setShippingSuffix(?string $shippingSuffix): self
    {
        $this->shippingSuffix = $shippingSuffix;

        return $this;
    }

    public function getShippingStreetFull(): ?string
    {
        return $this->shippingStreetFull;
    }

    public function setShippingStreetFull(?string $shippingStreetFull): self
    {
        $this->shippingStreetFull = $shippingStreetFull;

        return $this;
    }

    public function getShippingCity(): ?string
    {
        return $this->shippingCity;
    }

    public function setShippingCity(?string $shippingCity): self
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    public function getShippingRegion(): ?string
    {
        return $this->shippingRegion;
    }

    public function setShippingRegion(?string $shippingRegion): self
    {
        $this->shippingRegion = $shippingRegion;

        return $this;
    }

    public function getShippingCountry(): ?string
    {
        return $this->shippingCountry;
    }

    public function setShippingCountry(?string $shippingCountry): self
    {
        $this->shippingCountry = $shippingCountry;

        return $this;
    }

    public function getShippingPostcode(): ?string
    {
        return $this->shippingPostcode;
    }

    public function setShippingPostcode(?string $shippingPostcode): self
    {
        $this->shippingPostcode = $shippingPostcode;

        return $this;
    }

    public function getShippingTelephone(): ?string
    {
        return $this->shippingTelephone;
    }

    public function setShippingTelephone(?string $shippingTelephone): self
    {
        $this->shippingTelephone = $shippingTelephone;

        return $this;
    }

    public function getShippingCompany(): ?string
    {
        return $this->shippingCompany;
    }

    public function setShippingCompany(?string $shippingCompany): self
    {
        $this->shippingCompany = $shippingCompany;

        return $this;
    }

    public function getShippingFax(): ?string
    {
        return $this->shippingFax;
    }

    public function setShippingFax(?string $shippingFax): self
    {
        $this->shippingFax = $shippingFax;

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

    public function getCctype(): ?string
    {
        return $this->cctype;
    }

    public function setCctype(?string $cctype): self
    {
        $this->cctype = $cctype;

        return $this;
    }


}
