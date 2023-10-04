<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MageOrdersProducts
 */
#[ORM\Table(name: 'mage_orders_products')]
#[ORM\Entity]
class MageOrdersProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'order_id', type: 'string', length: 255, nullable: true)]
    private $orderId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_sku', type: 'string', length: 255, nullable: true)]
    private $productSku;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_name', type: 'string', length: 255, nullable: true)]
    private $productName;

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
     * @var int|null
     */
    #[ORM\Column(name: 'qty_ordered', type: 'integer', nullable: true)]
    private $qtyOrdered;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'qty_invoiced', type: 'integer', nullable: true)]
    private $qtyInvoiced;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'qty_shipped', type: 'integer', nullable: true)]
    private $qtyShipped;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'qty_refunded', type: 'integer', nullable: true)]
    private $qtyRefunded;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'qty_canceled', type: 'integer', nullable: true)]
    private $qtyCanceled;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_type', type: 'string', length: 255, nullable: true)]
    private $productType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'original_price', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $originalPrice;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_original_price', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseOriginalPrice;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'row_total', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $rowTotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_row_total', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $baseRowTotal;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'row_weight', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $rowWeight;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'price_incl_tax', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $priceInclTax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'base_price_incl_tax', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $basePriceInclTax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $productTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_base_tax_amount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $productBaseTaxAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_tax_percent', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $productTaxPercent;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_discount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $productDiscount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_base_discount', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $productBaseDiscount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_discount_percent', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $productDiscountPercent;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'is_child', type: 'string', length: 255, nullable: true)]
    private $isChild;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_options', type: 'text', length: 65535, nullable: true)]
    private $productOptions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getProductSku(): ?string
    {
        return $this->productSku;
    }

    public function setProductSku(?string $productSku): self
    {
        $this->productSku = $productSku;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

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

    public function getQtyOrdered(): ?int
    {
        return $this->qtyOrdered;
    }

    public function setQtyOrdered(?int $qtyOrdered): self
    {
        $this->qtyOrdered = $qtyOrdered;

        return $this;
    }

    public function getQtyInvoiced(): ?int
    {
        return $this->qtyInvoiced;
    }

    public function setQtyInvoiced(?int $qtyInvoiced): self
    {
        $this->qtyInvoiced = $qtyInvoiced;

        return $this;
    }

    public function getQtyShipped(): ?int
    {
        return $this->qtyShipped;
    }

    public function setQtyShipped(?int $qtyShipped): self
    {
        $this->qtyShipped = $qtyShipped;

        return $this;
    }

    public function getQtyRefunded(): ?int
    {
        return $this->qtyRefunded;
    }

    public function setQtyRefunded(?int $qtyRefunded): self
    {
        $this->qtyRefunded = $qtyRefunded;

        return $this;
    }

    public function getQtyCanceled(): ?int
    {
        return $this->qtyCanceled;
    }

    public function setQtyCanceled(?int $qtyCanceled): self
    {
        $this->qtyCanceled = $qtyCanceled;

        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;

        return $this;
    }

    public function getOriginalPrice(): ?string
    {
        return $this->originalPrice;
    }

    public function setOriginalPrice(?string $originalPrice): self
    {
        $this->originalPrice = $originalPrice;

        return $this;
    }

    public function getBaseOriginalPrice(): ?string
    {
        return $this->baseOriginalPrice;
    }

    public function setBaseOriginalPrice(?string $baseOriginalPrice): self
    {
        $this->baseOriginalPrice = $baseOriginalPrice;

        return $this;
    }

    public function getRowTotal(): ?string
    {
        return $this->rowTotal;
    }

    public function setRowTotal(?string $rowTotal): self
    {
        $this->rowTotal = $rowTotal;

        return $this;
    }

    public function getBaseRowTotal(): ?string
    {
        return $this->baseRowTotal;
    }

    public function setBaseRowTotal(?string $baseRowTotal): self
    {
        $this->baseRowTotal = $baseRowTotal;

        return $this;
    }

    public function getRowWeight(): ?string
    {
        return $this->rowWeight;
    }

    public function setRowWeight(?string $rowWeight): self
    {
        $this->rowWeight = $rowWeight;

        return $this;
    }

    public function getPriceInclTax(): ?string
    {
        return $this->priceInclTax;
    }

    public function setPriceInclTax(?string $priceInclTax): self
    {
        $this->priceInclTax = $priceInclTax;

        return $this;
    }

    public function getBasePriceInclTax(): ?string
    {
        return $this->basePriceInclTax;
    }

    public function setBasePriceInclTax(?string $basePriceInclTax): self
    {
        $this->basePriceInclTax = $basePriceInclTax;

        return $this;
    }

    public function getProductTaxAmount(): ?string
    {
        return $this->productTaxAmount;
    }

    public function setProductTaxAmount(?string $productTaxAmount): self
    {
        $this->productTaxAmount = $productTaxAmount;

        return $this;
    }

    public function getProductBaseTaxAmount(): ?string
    {
        return $this->productBaseTaxAmount;
    }

    public function setProductBaseTaxAmount(?string $productBaseTaxAmount): self
    {
        $this->productBaseTaxAmount = $productBaseTaxAmount;

        return $this;
    }

    public function getProductTaxPercent(): ?string
    {
        return $this->productTaxPercent;
    }

    public function setProductTaxPercent(?string $productTaxPercent): self
    {
        $this->productTaxPercent = $productTaxPercent;

        return $this;
    }

    public function getProductDiscount(): ?string
    {
        return $this->productDiscount;
    }

    public function setProductDiscount(?string $productDiscount): self
    {
        $this->productDiscount = $productDiscount;

        return $this;
    }

    public function getProductBaseDiscount(): ?string
    {
        return $this->productBaseDiscount;
    }

    public function setProductBaseDiscount(?string $productBaseDiscount): self
    {
        $this->productBaseDiscount = $productBaseDiscount;

        return $this;
    }

    public function getProductDiscountPercent(): ?string
    {
        return $this->productDiscountPercent;
    }

    public function setProductDiscountPercent(?string $productDiscountPercent): self
    {
        $this->productDiscountPercent = $productDiscountPercent;

        return $this;
    }

    public function getIsChild(): ?string
    {
        return $this->isChild;
    }

    public function setIsChild(?string $isChild): self
    {
        $this->isChild = $isChild;

        return $this;
    }

    public function getProductOptions(): ?string
    {
        return $this->productOptions;
    }

    public function setProductOptions(?string $productOptions): self
    {
        $this->productOptions = $productOptions;

        return $this;
    }


}
