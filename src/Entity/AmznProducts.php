<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznProducts
 */
#[ORM\Table(name: 'amzn_products')]
#[ORM\Entity]
class AmznProducts
{
    /**
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'string', length: 128, nullable: true)]
    private $title;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'description', type: 'text', length: 65535, nullable: true)]
    private $description;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet1', type: 'string', length: 500, nullable: true)]
    private $bullet1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet2', type: 'string', length: 500, nullable: true)]
    private $bullet2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet2_metric', type: 'string', length: 500, nullable: true)]
    private $bullet2Metric;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet3', type: 'string', length: 500, nullable: true)]
    private $bullet3;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet4', type: 'string', length: 500, nullable: true)]
    private $bullet4;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet5', type: 'string', length: 500, nullable: true)]
    private $bullet5;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'keywords', type: 'string', length: 255, nullable: true)]
    private $keywords;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'item_type', type: 'string', length: 128, nullable: true)]
    private $itemType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_category', type: 'string', length: 64, nullable: true)]
    private $productCategory;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'product_type', type: 'string', length: 128, nullable: true)]
    private $productType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'amzn_price', type: 'decimal', precision: 14, scale: 4, nullable: true)]
    private $amznPrice;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'department_name', type: 'string', length: 128, nullable: true)]
    private $departmentName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'metal_type', type: 'string', length: 128, nullable: true)]
    private $metalType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'metal_stamp', type: 'string', length: 128, nullable: true)]
    private $metalStamp;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'variation_theme', type: 'string', length: 256, nullable: true)]
    private $variationTheme;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'band_material', type: 'string', length: 256, nullable: true)]
    private $bandMaterial;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'band_width', type: 'integer', nullable: true)]
    private $bandWidth;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'band_width_unit_of_measure', type: 'string', length: 256, nullable: true)]
    private $bandWidthUnitOfMeasure;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'band_color', type: 'string', length: 256, nullable: true)]
    private $bandColor;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'case_size_diameter', type: 'integer', nullable: true)]
    private $caseSizeDiameter;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'case_diameter_unit_of_measure', type: 'string', length: 256, nullable: true)]
    private $caseDiameterUnitOfMeasure;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'dial_color', type: 'string', length: 256, nullable: true)]
    private $dialColor;

    /**
     * @var \Products
     */
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'products_id')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\OneToOne(targetEntity: 'Products')]
    private $product;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBullet1(): ?string
    {
        return $this->bullet1;
    }

    public function setBullet1(?string $bullet1): self
    {
        $this->bullet1 = $bullet1;

        return $this;
    }

    public function getBullet2(): ?string
    {
        return $this->bullet2;
    }

    public function setBullet2(?string $bullet2): self
    {
        $this->bullet2 = $bullet2;

        return $this;
    }

    public function getBullet2Metric(): ?string
    {
        return $this->bullet2Metric;
    }

    public function setBullet2Metric(?string $bullet2Metric): self
    {
        $this->bullet2Metric = $bullet2Metric;

        return $this;
    }

    public function getBullet3(): ?string
    {
        return $this->bullet3;
    }

    public function setBullet3(?string $bullet3): self
    {
        $this->bullet3 = $bullet3;

        return $this;
    }

    public function getBullet4(): ?string
    {
        return $this->bullet4;
    }

    public function setBullet4(?string $bullet4): self
    {
        $this->bullet4 = $bullet4;

        return $this;
    }

    public function getBullet5(): ?string
    {
        return $this->bullet5;
    }

    public function setBullet5(?string $bullet5): self
    {
        $this->bullet5 = $bullet5;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    public function setItemType(?string $itemType): self
    {
        $this->itemType = $itemType;

        return $this;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function setProductCategory(?string $productCategory): self
    {
        $this->productCategory = $productCategory;

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

    public function getAmznPrice(): ?string
    {
        return $this->amznPrice;
    }

    public function setAmznPrice(?string $amznPrice): self
    {
        $this->amznPrice = $amznPrice;

        return $this;
    }

    public function getDepartmentName(): ?string
    {
        return $this->departmentName;
    }

    public function setDepartmentName(?string $departmentName): self
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    public function getMetalType(): ?string
    {
        return $this->metalType;
    }

    public function setMetalType(?string $metalType): self
    {
        $this->metalType = $metalType;

        return $this;
    }

    public function getMetalStamp(): ?string
    {
        return $this->metalStamp;
    }

    public function setMetalStamp(?string $metalStamp): self
    {
        $this->metalStamp = $metalStamp;

        return $this;
    }

    public function getVariationTheme(): ?string
    {
        return $this->variationTheme;
    }

    public function setVariationTheme(?string $variationTheme): self
    {
        $this->variationTheme = $variationTheme;

        return $this;
    }

    public function getBandMaterial(): ?string
    {
        return $this->bandMaterial;
    }

    public function setBandMaterial(?string $bandMaterial): self
    {
        $this->bandMaterial = $bandMaterial;

        return $this;
    }

    public function getBandWidth(): ?int
    {
        return $this->bandWidth;
    }

    public function setBandWidth(?int $bandWidth): self
    {
        $this->bandWidth = $bandWidth;

        return $this;
    }

    public function getBandWidthUnitOfMeasure(): ?string
    {
        return $this->bandWidthUnitOfMeasure;
    }

    public function setBandWidthUnitOfMeasure(?string $bandWidthUnitOfMeasure): self
    {
        $this->bandWidthUnitOfMeasure = $bandWidthUnitOfMeasure;

        return $this;
    }

    public function getBandColor(): ?string
    {
        return $this->bandColor;
    }

    public function setBandColor(?string $bandColor): self
    {
        $this->bandColor = $bandColor;

        return $this;
    }

    public function getCaseSizeDiameter(): ?int
    {
        return $this->caseSizeDiameter;
    }

    public function setCaseSizeDiameter(?int $caseSizeDiameter): self
    {
        $this->caseSizeDiameter = $caseSizeDiameter;

        return $this;
    }

    public function getCaseDiameterUnitOfMeasure(): ?string
    {
        return $this->caseDiameterUnitOfMeasure;
    }

    public function setCaseDiameterUnitOfMeasure(?string $caseDiameterUnitOfMeasure): self
    {
        $this->caseDiameterUnitOfMeasure = $caseDiameterUnitOfMeasure;

        return $this;
    }

    public function getDialColor(): ?string
    {
        return $this->dialColor;
    }

    public function setDialColor(?string $dialColor): self
    {
        $this->dialColor = $dialColor;

        return $this;
    }

    public function getProduct(): ?Products
    {
        return $this->product;
    }

    public function setProduct(?Products $product): self
    {
        $this->product = $product;

        return $this;
    }


}
