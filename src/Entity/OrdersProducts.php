<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersProducts
 */
#[ORM\Table(name: 'orders_products')]
#[ORM\Entity]
class OrdersProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersProductsId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: true)]
    private $ordersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    private $productsId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_model', type: 'string', length: 18, nullable: true)]
    private $productsModel;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_name', type: 'string', length: 256, nullable: false)]
    private $productsName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_price_orig', type: 'decimal', precision: 15, scale: 4, nullable: true)]
    private $productsPriceOrig;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'final_price_orig', type: 'decimal', precision: 15, scale: 4, nullable: true)]
    private $finalPriceOrig;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $productsPrice = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'final_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $finalPrice = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_tax', type: 'decimal', precision: 7, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $productsTax = '0.0000';

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_quantity', type: 'integer', nullable: false)]
    private $productsQuantity = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'giftwrap_qty', type: 'smallint', nullable: false)]
    private $giftwrapQty = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'giftwrap_total', type: 'decimal', precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $giftwrapTotal = '0.00';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_card_type', type: 'string', length: 0, nullable: true)]
    private $giftCardType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gv_to', type: 'string', length: 255, nullable: true)]
    private $gvTo;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gv_from', type: 'string', length: 255, nullable: true)]
    private $gvFrom;

    public function getOrdersProductsId(): ?int
    {
        return $this->ordersProductsId;
    }

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
    }

    public function setOrdersId(?string $ordersId): self
    {
        $this->ordersId = $ordersId;

        return $this;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function setProductsId(int $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }

    public function getProductsModel(): ?string
    {
        return $this->productsModel;
    }

    public function setProductsModel(?string $productsModel): self
    {
        $this->productsModel = $productsModel;

        return $this;
    }

    public function getProductsName(): ?string
    {
        return $this->productsName;
    }

    public function setProductsName(string $productsName): self
    {
        $this->productsName = $productsName;

        return $this;
    }

    public function getProductsPriceOrig(): ?string
    {
        return $this->productsPriceOrig;
    }

    public function setProductsPriceOrig(?string $productsPriceOrig): self
    {
        $this->productsPriceOrig = $productsPriceOrig;

        return $this;
    }

    public function getFinalPriceOrig(): ?string
    {
        return $this->finalPriceOrig;
    }

    public function setFinalPriceOrig(?string $finalPriceOrig): self
    {
        $this->finalPriceOrig = $finalPriceOrig;

        return $this;
    }

    public function getProductsPrice(): ?string
    {
        return $this->productsPrice;
    }

    public function setProductsPrice(string $productsPrice): self
    {
        $this->productsPrice = $productsPrice;

        return $this;
    }

    public function getFinalPrice(): ?string
    {
        return $this->finalPrice;
    }

    public function setFinalPrice(string $finalPrice): self
    {
        $this->finalPrice = $finalPrice;

        return $this;
    }

    public function getProductsTax(): ?string
    {
        return $this->productsTax;
    }

    public function setProductsTax(string $productsTax): self
    {
        $this->productsTax = $productsTax;

        return $this;
    }

    public function getProductsQuantity(): ?int
    {
        return $this->productsQuantity;
    }

    public function setProductsQuantity(int $productsQuantity): self
    {
        $this->productsQuantity = $productsQuantity;

        return $this;
    }

    public function getGiftwrapQty(): ?int
    {
        return $this->giftwrapQty;
    }

    public function setGiftwrapQty(int $giftwrapQty): self
    {
        $this->giftwrapQty = $giftwrapQty;

        return $this;
    }

    public function getGiftwrapTotal(): ?string
    {
        return $this->giftwrapTotal;
    }

    public function setGiftwrapTotal(string $giftwrapTotal): self
    {
        $this->giftwrapTotal = $giftwrapTotal;

        return $this;
    }

    public function getGiftCardType(): ?string
    {
        return $this->giftCardType;
    }

    public function setGiftCardType(?string $giftCardType): self
    {
        $this->giftCardType = $giftCardType;

        return $this;
    }

    public function getGvTo(): ?string
    {
        return $this->gvTo;
    }

    public function setGvTo(?string $gvTo): self
    {
        $this->gvTo = $gvTo;

        return $this;
    }

    public function getGvFrom(): ?string
    {
        return $this->gvFrom;
    }

    public function setGvFrom(?string $gvFrom): self
    {
        $this->gvFrom = $gvFrom;

        return $this;
    }


}
