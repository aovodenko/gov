<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvInventoryPurchases
 */
#[ORM\Table(name: 'inv_inventory_purchases')]
#[ORM\Entity]
class InvInventoryPurchases
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'invoice_date', type: 'date', nullable: true)]
    private $invoiceDate;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'fiscal_year', type: 'smallint', nullable: true)]
    private $fiscalYear;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'invoice_num', type: 'string', length: 40, nullable: true)]
    private $invoiceNum;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vendor', type: 'string', length: 40, nullable: true)]
    private $vendor;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'model', type: 'string', length: 20, nullable: true)]
    private $model;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'descr', type: 'string', length: 100, nullable: true)]
    private $descr;

    /**
     * @var int
     */
    #[ORM\Column(name: 'qty', type: 'smallint', nullable: false)]
    private $qty = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'price_FX', type: 'decimal', precision: 10, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $priceFx = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'total_FX', type: 'decimal', precision: 10, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $totalFx = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'FX_Rate', type: 'decimal', precision: 10, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $fxRate = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'price_US', type: 'decimal', precision: 10, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $priceUs = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'total_US', type: 'decimal', precision: 10, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $totalUs = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'order_total_EUR', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $orderTotalEur = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'order_total_US', type: 'decimal', precision: 15, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $orderTotalUs = '0.00';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?\DateTimeInterface $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getFiscalYear(): ?int
    {
        return $this->fiscalYear;
    }

    public function setFiscalYear(?int $fiscalYear): self
    {
        $this->fiscalYear = $fiscalYear;

        return $this;
    }

    public function getInvoiceNum(): ?string
    {
        return $this->invoiceNum;
    }

    public function setInvoiceNum(?string $invoiceNum): self
    {
        $this->invoiceNum = $invoiceNum;

        return $this;
    }

    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(?string $descr): self
    {
        $this->descr = $descr;

        return $this;
    }

    public function getQty(): ?int
    {
        return $this->qty;
    }

    public function setQty(int $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getPriceFx(): ?string
    {
        return $this->priceFx;
    }

    public function setPriceFx(string $priceFx): self
    {
        $this->priceFx = $priceFx;

        return $this;
    }

    public function getTotalFx(): ?string
    {
        return $this->totalFx;
    }

    public function setTotalFx(string $totalFx): self
    {
        $this->totalFx = $totalFx;

        return $this;
    }

    public function getFxRate(): ?string
    {
        return $this->fxRate;
    }

    public function setFxRate(string $fxRate): self
    {
        $this->fxRate = $fxRate;

        return $this;
    }

    public function getPriceUs(): ?string
    {
        return $this->priceUs;
    }

    public function setPriceUs(string $priceUs): self
    {
        $this->priceUs = $priceUs;

        return $this;
    }

    public function getTotalUs(): ?string
    {
        return $this->totalUs;
    }

    public function setTotalUs(string $totalUs): self
    {
        $this->totalUs = $totalUs;

        return $this;
    }

    public function getOrderTotalEur(): ?string
    {
        return $this->orderTotalEur;
    }

    public function setOrderTotalEur(string $orderTotalEur): self
    {
        $this->orderTotalEur = $orderTotalEur;

        return $this;
    }

    public function getOrderTotalUs(): ?string
    {
        return $this->orderTotalUs;
    }

    public function setOrderTotalUs(string $orderTotalUs): self
    {
        $this->orderTotalUs = $orderTotalUs;

        return $this;
    }


}
