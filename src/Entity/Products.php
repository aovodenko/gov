<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\ProductsDescription;
use App\Entity\Specials;
use App\Entity\ProductsRecommend;
use App\Entity\GiftwrapOptions;
use App\Entity\TaxClass;
use App\Entity\CustomersBasket;
use App\Entity\Categories;

/**
 * Products
 */
#[ORM\Table(name: 'products')]
#[ORM\Index(name: 'idx_products_date_added', columns: ['products_date_added'])]
#[ORM\Entity(repositoryClass: 'App\Repository\ProductsRepository')]
class Products
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $productsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_quantity', type: 'integer', nullable: false)]
    private $productsQuantity = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_model', type: 'string', length: 18, nullable: true)]
    private $productsModel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_image', type: 'string', length: 64, nullable: true)]
    private $productsImage;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $productsPrice = 0;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'UPC', type: 'string', length: 12, nullable: true, options: ['fixed' => true])]
    private $upc;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sell_AMZN', type: 'boolean', nullable: false)]
    private $sellAmzn = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sell_AMZN_EU', type: 'boolean', nullable: false)]
    private $sellAmznEu = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'sell_EBAY', type: 'boolean', nullable: true)]
    private $sellEbay = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'sell_HOUZZ', type: 'boolean', nullable: true)]
    private $sellHouzz = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'sell_ETSY', type: 'boolean', nullable: true)]
    private $sellEtsy = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'products_date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $productsDateAdded = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'products_last_modified', type: 'datetime', nullable: true)]
    private $productsLastModified;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'products_date_available', type: 'datetime', nullable: true)]
    private $productsDateAvailable;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_weight', type: 'decimal', precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $productsWeight = '0.00';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'products_status', type: 'boolean', nullable: false)]
    private $productsStatus = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_tax_class_id', type: 'integer', nullable: false)]
    private $productsTaxClassId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'manufacturers_id', type: 'integer', nullable: true)]
    private $manufacturersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_ordered', type: 'integer', nullable: false)]
    private $productsOrdered = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_sort_order', type: 'integer', nullable: true)]
    private $productsSortOrder;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'products_ship_sep', type: 'boolean', nullable: false)]
    private $productsShipSep = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_location', type: 'string', length: 12, nullable: true)]
    private $productsLocation;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'giftwrap_id', type: 'integer', nullable: true)]
    private $giftwrapId;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'no_flat_ship', type: 'boolean', nullable: false)]
    private $noFlatShip = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_id', type: 'string', length: 128, nullable: true)]
    private $vimeoId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_thumbnail_small_url', type: 'string', length: 512, nullable: true)]
    private $vimeoThumbnailSmallUrl;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_thumbnail_medium_url', type: 'string', length: 512, nullable: true)]
    private $vimeoThumbnailMediumUrl;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_duration', type: 'string', length: 128, nullable: true)]
    private $vimeoDuration;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_width', type: 'string', length: 128, nullable: true)]
    private $vimeoWidth;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_height', type: 'string', length: 128, nullable: true)]
    private $vimeoHeight;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'vimeo_upload_date', type: 'datetime', nullable: true)]
    private $vimeoUploadDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'vimeo_hd_link', type: 'string', length: 255, nullable: true)]
    private $vimeoHdLink;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: '360_view', type: 'boolean', nullable: true)]
    private $_360View = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'jet_browse_node_id', type: 'string', length: 32, nullable: true)]
    private $jetBrowseNodeId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ebay_item_id', type: 'string', length: 32, nullable: true)]
    private $ebayItemId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ebay_item_status', type: 'string', length: 0, nullable: true, options: ['default' => 'New'])]
    private $ebayItemStatus = 'New';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ebay_category_id', type: 'string', length: 32, nullable: true)]
    private $ebayCategoryId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ebay_store_category_id_1', type: 'string', length: 32, nullable: true)]
    private $ebayStoreCategoryId1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ebay_store_category_id_2', type: 'string', length: 32, nullable: true)]
    private $ebayStoreCategoryId2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'etsy_taxonomy_id', type: 'string', length: 32, nullable: true)]
    private $etsyTaxonomyId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'etsy_sections_id', type: 'integer', nullable: true)]
    private $etsySectionsId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'houzz_category_id', type: 'integer', nullable: true)]
    private $houzzCategoryId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'width', type: 'decimal', precision: 6, scale: 3, nullable: true)]
    private $width;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'depth', type: 'decimal', precision: 6, scale: 3, nullable: true)]
    private $depth;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'height', type: 'decimal', precision: 6, scale: 3, nullable: true)]
    private $height;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'packageWidth', type: 'decimal', precision: 6, scale: 3, nullable: true)]
    private $packagewidth;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'packageDepth', type: 'decimal', precision: 6, scale: 3, nullable: true)]
    private $packagedepth;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'packageHeight', type: 'decimal', precision: 6, scale: 3, nullable: true)]
    private $packageheight;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'packageWeight', type: 'integer', nullable: true)]
    private $packageweight;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sales90', type: 'smallint', nullable: true)]
    private $sales90;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sales180', type: 'smallint', nullable: true)]
    private $sales180;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sales365', type: 'smallint', nullable: true)]
    private $sales365;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'amazon_sales90', type: 'smallint', nullable: true)]
    private $amazonSales90;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'amazon_sales180', type: 'smallint', nullable: true)]
    private $amazonSales180;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'amazon_sales365', type: 'smallint', nullable: true)]
    private $amazonSales365;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'afn_quantity', type: 'boolean', nullable: true)]
    private $afnQuantity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_card_type', type: 'string', length: 0, nullable: true)]
    private $giftCardType;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'storage_quantity', type: 'integer', nullable: true)]
    private $storageQuantity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'storage_location', type: 'text', length: 65535, nullable: true)]
    private $storageLocation;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\GiftwrapOptions', inversedBy: 'products')]
    #[ORM\JoinColumn(name: 'giftwrap_id', referencedColumnName: 'giftwrap_id')]
    private $giftwrap;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\TaxClass', inversedBy: 'products')]
    #[ORM\JoinColumn(name: 'products_tax_class_id', referencedColumnName: 'tax_class_id')]
    private $productsTaxClass;

    #[ORM\OneToMany(targetEntity: 'App\Entity\ProductsDescription', mappedBy: 'products', fetch: 'EAGER')]
    private $productsDescription;

    #[ORM\OneToMany(targetEntity: 'App\Entity\ProductsAttributes', mappedBy: 'products', fetch: 'EAGER')]
    private $productsAttributes;

    #[ORM\OneToOne(targetEntity: 'App\Entity\Specials', mappedBy: 'products')]
    private $specials;
    
    #[ORM\OneToMany(mappedBy: 'products', targetEntity: 'App\Entity\ProductsRecommend', orphanRemoval: true)]
    private Collection $productsRecommend;

    #[ORM\OneToMany(mappedBy: 'products', targetEntity: 'App\Entity\Reviews', orphanRemoval: true)]
    private Collection $reviews;    
    
    private $giftwrapPrice;

    private $price;

    private $productsPriceOrig;

    private $finalPriceOrig;

    private $specialsNewProductsPrice;

    private $finalPrice;

    private $productsName;

    private $productsDescriptionText;

    private $attributes_price = 0;

    private $taxRate = 0;

    private $attributes;

    #[ORM\JoinTable(name: 'products_to_categories')]
    #[ORM\JoinColumn(name: 'products_id', referencedColumnName: 'products_id')]
    #[ORM\InverseJoinColumn(name: 'categories_id', referencedColumnName: 'categories_id')]
    #[ORM\ManyToMany(targetEntity: 'App\Entity\Categories', inversedBy: 'products')]
    private Collection $categories;

    public function __construct()
    {
        $this->productsDescription = new ArrayCollection();
        $this->productsAttributes = new ArrayCollection();
        $this->productsRecommends = new ArrayCollection();
        $this->productsRecommend = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
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

    public function getProductsModel(): ?string
    {
        return $this->productsModel;
    }

    public function setProductsModel(?string $productsModel): self
    {
        $this->productsModel = $productsModel;

        return $this;
    }

    public function getProductsImage(): ?string
    {
        return $this->productsImage;
    }

    public function setProductsImage(?string $productsImage): self
    {
        $this->productsImage = $productsImage;

        return $this;
    }

    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;

        return $this;
    }

    public function getSellAmzn(): ?bool
    {
        return $this->sellAmzn;
    }

    public function setSellAmzn(bool $sellAmzn): self
    {
        $this->sellAmzn = $sellAmzn;

        return $this;
    }

    public function getSellAmznEu(): ?bool
    {
        return $this->sellAmznEu;
    }

    public function setSellAmznEu(bool $sellAmznEu): self
    {
        $this->sellAmznEu = $sellAmznEu;

        return $this;
    }

    public function getSellEbay(): ?bool
    {
        return $this->sellEbay;
    }

    public function setSellEbay(?bool $sellEbay): self
    {
        $this->sellEbay = $sellEbay;

        return $this;
    }

    public function getSellHouzz(): ?bool
    {
        return $this->sellHouzz;
    }

    public function setSellHouzz(?bool $sellHouzz): self
    {
        $this->sellHouzz = $sellHouzz;

        return $this;
    }

    public function getSellEtsy(): ?bool
    {
        return $this->sellEtsy;
    }

    public function setSellEtsy(?bool $sellEtsy): self
    {
        $this->sellEtsy = $sellEtsy;

        return $this;
    }

    public function getProductsDateAdded(): ?\DateTimeInterface
    {
        return $this->productsDateAdded;
    }

    public function setProductsDateAdded(\DateTimeInterface $productsDateAdded): self
    {
        $this->productsDateAdded = $productsDateAdded;

        return $this;
    }

    public function getProductsLastModified(): ?\DateTimeInterface
    {
        return $this->productsLastModified;
    }

    public function setProductsLastModified(?\DateTimeInterface $productsLastModified): self
    {
        $this->productsLastModified = $productsLastModified;

        return $this;
    }

    public function getProductsDateAvailable(): ?\DateTimeInterface
    {
        return $this->productsDateAvailable;
    }

    public function setProductsDateAvailable(?\DateTimeInterface $productsDateAvailable): self
    {
        $this->productsDateAvailable = $productsDateAvailable;

        return $this;
    }

    public function getProductsWeight(): ?string
    {
        return $this->productsWeight;
    }

    public function setProductsWeight(string $productsWeight): self
    {
        $this->productsWeight = $productsWeight;

        return $this;
    }

    public function getProductsStatus(): ?bool
    {
        return $this->productsStatus;
    }

    public function setProductsStatus(bool $productsStatus): self
    {
        $this->productsStatus = $productsStatus;

        return $this;
    }

    public function getProductsTaxClassId(): ?int
    {
        return $this->productsTaxClassId;
    }

    public function setProductsTaxClassId(int $productsTaxClassId): self
    {
        $this->productsTaxClassId = $productsTaxClassId;

        return $this;
    }

    public function getManufacturersId(): ?int
    {
        return $this->manufacturersId;
    }

    public function setManufacturersId(?int $manufacturersId): self
    {
        $this->manufacturersId = $manufacturersId;

        return $this;
    }

    public function getProductsOrdered(): ?int
    {
        return $this->productsOrdered;
    }

    public function setProductsOrdered(int $productsOrdered): self
    {
        $this->productsOrdered = $productsOrdered;

        return $this;
    }

    public function getProductsSortOrder(): ?int
    {
        return $this->productsSortOrder;
    }

    public function setProductsSortOrder(?int $productsSortOrder): self
    {
        $this->productsSortOrder = $productsSortOrder;

        return $this;
    }

    public function getProductsShipSep(): ?bool
    {
        return $this->productsShipSep;
    }

    public function setProductsShipSep(bool $productsShipSep): self
    {
        $this->productsShipSep = $productsShipSep;

        return $this;
    }

    public function getProductsLocation(): ?string
    {
        return $this->productsLocation;
    }

    public function setProductsLocation(?string $productsLocation): self
    {
        $this->productsLocation = $productsLocation;

        return $this;
    }

    public function getGiftwrapId(): ?int
    {
        return $this->giftwrapId ?: 0;
    }

    public function setGiftwrapId(?int $giftwrapId): self
    {
        $this->giftwrapId = $giftwrapId;

        return $this;
    }

    public function getNoFlatShip(): ?bool
    {
        return $this->noFlatShip;
    }

    public function setNoFlatShip(bool $noFlatShip): self
    {
        $this->noFlatShip = $noFlatShip;

        return $this;
    }

    public function getVimeoId(): ?string
    {
        return $this->vimeoId;
    }

    public function setVimeoId(?string $vimeoId): self
    {
        $this->vimeoId = $vimeoId;

        return $this;
    }

    public function getVimeoThumbnailSmallUrl(): ?string
    {
        return $this->vimeoThumbnailSmallUrl;
    }

    public function setVimeoThumbnailSmallUrl(?string $vimeoThumbnailSmallUrl): self
    {
        $this->vimeoThumbnailSmallUrl = $vimeoThumbnailSmallUrl;

        return $this;
    }

    public function getVimeoThumbnailMediumUrl(): ?string
    {
        return $this->vimeoThumbnailMediumUrl;
    }

    public function setVimeoThumbnailMediumUrl(?string $vimeoThumbnailMediumUrl): self
    {
        $this->vimeoThumbnailMediumUrl = $vimeoThumbnailMediumUrl;

        return $this;
    }

    public function getVimeoDuration(): ?string
    {
        return $this->vimeoDuration;
    }

    public function setVimeoDuration(?string $vimeoDuration): self
    {
        $this->vimeoDuration = $vimeoDuration;

        return $this;
    }

    public function getVimeoWidth(): ?string
    {
        return $this->vimeoWidth;
    }

    public function setVimeoWidth(?string $vimeoWidth): self
    {
        $this->vimeoWidth = $vimeoWidth;

        return $this;
    }

    public function getVimeoHeight(): ?string
    {
        return $this->vimeoHeight;
    }

    public function setVimeoHeight(?string $vimeoHeight): self
    {
        $this->vimeoHeight = $vimeoHeight;

        return $this;
    }

    public function getVimeoUploadDate(): ?\DateTimeInterface
    {
        return $this->vimeoUploadDate;
    }

    public function setVimeoUploadDate(?\DateTimeInterface $vimeoUploadDate): self
    {
        $this->vimeoUploadDate = $vimeoUploadDate;

        return $this;
    }

    public function getVimeoHdLink(): ?string
    {
        return $this->vimeoHdLink;
    }

    public function setVimeoHdLink(?string $vimeoHdLink): self
    {
        $this->vimeoHdLink = $vimeoHdLink;

        return $this;
    }

    public function get360View(): ?bool
    {
        return $this->_360View;
    }

    public function set360View(?bool $_360View): self
    {
        $this->_360View = $_360View;

        return $this;
    }

    public function getJetBrowseNodeId(): ?string
    {
        return $this->jetBrowseNodeId;
    }

    public function setJetBrowseNodeId(?string $jetBrowseNodeId): self
    {
        $this->jetBrowseNodeId = $jetBrowseNodeId;

        return $this;
    }

    public function getEbayItemId(): ?string
    {
        return $this->ebayItemId;
    }

    public function setEbayItemId(?string $ebayItemId): self
    {
        $this->ebayItemId = $ebayItemId;

        return $this;
    }

    public function getEbayItemStatus(): ?string
    {
        return $this->ebayItemStatus;
    }

    public function setEbayItemStatus(?string $ebayItemStatus): self
    {
        $this->ebayItemStatus = $ebayItemStatus;

        return $this;
    }

    public function getEbayCategoryId(): ?string
    {
        return $this->ebayCategoryId;
    }

    public function setEbayCategoryId(?string $ebayCategoryId): self
    {
        $this->ebayCategoryId = $ebayCategoryId;

        return $this;
    }

    public function getEbayStoreCategoryId1(): ?string
    {
        return $this->ebayStoreCategoryId1;
    }

    public function setEbayStoreCategoryId1(?string $ebayStoreCategoryId1): self
    {
        $this->ebayStoreCategoryId1 = $ebayStoreCategoryId1;

        return $this;
    }

    public function getEbayStoreCategoryId2(): ?string
    {
        return $this->ebayStoreCategoryId2;
    }

    public function setEbayStoreCategoryId2(?string $ebayStoreCategoryId2): self
    {
        $this->ebayStoreCategoryId2 = $ebayStoreCategoryId2;

        return $this;
    }

    public function getEtsyTaxonomyId(): ?string
    {
        return $this->etsyTaxonomyId;
    }

    public function setEtsyTaxonomyId(?string $etsyTaxonomyId): self
    {
        $this->etsyTaxonomyId = $etsyTaxonomyId;

        return $this;
    }

    public function getEtsySectionsId(): ?int
    {
        return $this->etsySectionsId;
    }

    public function setEtsySectionsId(?int $etsySectionsId): self
    {
        $this->etsySectionsId = $etsySectionsId;

        return $this;
    }

    public function getHouzzCategoryId(): ?int
    {
        return $this->houzzCategoryId;
    }

    public function setHouzzCategoryId(?int $houzzCategoryId): self
    {
        $this->houzzCategoryId = $houzzCategoryId;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getDepth(): ?string
    {
        return $this->depth;
    }

    public function setDepth(?string $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getPackagewidth(): ?float
    {
        return (float)$this->packagewidth ?: 8;
    }

    public function setPackagewidth(?string $packagewidth): self
    {
        $this->packagewidth = $packagewidth;

        return $this;
    }

    public function getPackagedepth(): ?string
    {
        return (float)$this->packagedepth ?: 6;
    }

    public function setPackagedepth(?string $packagedepth): self
    {
        $this->packagedepth = $packagedepth;

        return $this;
    }

    public function getPackageheight(): ?string
    {
        return (float)$this->packageheight ?: 4;
    }

    public function setPackageheight(?string $packageheight): self
    {
        $this->packageheight = $packageheight;

        return $this;
    }

    public function getPackageweight(): ?int
    {
        return (float)$this->packageweight ?: 0.5;
    }

    public function setPackageweight(?int $packageweight): self
    {
        $this->packageweight = $packageweight;

        return $this;
    }

    public function getSales90(): ?int
    {
        return $this->sales90;
    }

    public function setSales90(?int $sales90): self
    {
        $this->sales90 = $sales90;

        return $this;
    }

    public function getSales180(): ?int
    {
        return $this->sales180;
    }

    public function setSales180(?int $sales180): self
    {
        $this->sales180 = $sales180;

        return $this;
    }

    public function getSales365(): ?int
    {
        return $this->sales365;
    }

    public function setSales365(?int $sales365): self
    {
        $this->sales365 = $sales365;

        return $this;
    }

    public function getAmazonSales90(): ?int
    {
        return $this->amazonSales90;
    }

    public function setAmazonSales90(?int $amazonSales90): self
    {
        $this->amazonSales90 = $amazonSales90;

        return $this;
    }

    public function getAmazonSales180(): ?int
    {
        return $this->amazonSales180;
    }

    public function setAmazonSales180(?int $amazonSales180): self
    {
        $this->amazonSales180 = $amazonSales180;

        return $this;
    }

    public function getAmazonSales365(): ?int
    {
        return $this->amazonSales365;
    }

    public function setAmazonSales365(?int $amazonSales365): self
    {
        $this->amazonSales365 = $amazonSales365;

        return $this;
    }

    public function getAfnQuantity(): ?bool
    {
        return $this->afnQuantity;
    }

    public function setAfnQuantity(?bool $afnQuantity): self
    {
        $this->afnQuantity = $afnQuantity;

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

    public function getStorageQuantity(): ?int
    {
        return $this->storageQuantity;
    }

    public function setStorageQuantity(?int $storageQuantity): self
    {
        $this->storageQuantity = $storageQuantity;

        return $this;
    }

    public function getStorageLocation(): ?string
    {
        return $this->storageLocation;
    }

    public function setStorageLocation(?string $storageLocation): self
    {
        $this->storageLocation = $storageLocation;

        return $this;
    }

    public function getSpecials(): ?Specials
    {
        if($this->specials){
          $current_date = new \Datetime();
          $specialsDateStarted = $this->specials->getSpecialsDateStarted();
          $expiresDate = $this->specials->getExpiresDate();

          if(
            ($current_date >= $specialsDateStarted || !$specialsDateStarted) &&
            ($current_date <= $expiresDate || !$expiresDate)
          ){
            return $this->specials;
          }
        }

        return $this->specials;
    }

    public function getGiftwrap(): ?GiftwrapOptions
    {
        return $this->giftwrap;
    }

    public function setGiftwrap(GiftwrapOptions $giftwrap): self
    {
        $this->giftwrap = $giftwrap;

        return $this;
    }

    public function getProductsTaxClass(): ?TaxClass
    {
        return $this->productsTaxClass;
    }

    public function getProductsAttributes(): ?Collection
    {
        return $this->productsAttributes;
    }

    public function getProductsAttribute($options_id, $options_values_id): ?Collection
    {
        return $this->productsAttributes->filter(function($productsAttributes) use ($options_id, $options_values_id) {
          return ($productsAttributes->getOptions()->getProductsOptionsId() == $options_id && $productsAttributes->getOptionsValues()->getProductsOptionsValuesId() == $options_values_id);
        });
    }

    public function getGiftwrapPrice(): ?float
    {
        $this->giftwrapPrice = $this->getGiftwrap() ? (float)$this->getGiftwrap()->getGiftwrapPrice() : 0;

        return $this->giftwrapPrice;
    }

    public function getPrice(): ?float
    {
        $this->price = $this->getSpecials() ? (float)$this->getSpecials()->getSpecialsNewProductsPrice() : (float)$this->productsPrice;

        return $this->price;
    }

    public function getProductsPrice(): ?float
    {
        return (float)$this->productsPrice + $this->getProductsAttributesPrice();
    }

    public function getProductsPriceOrig(): ?float
    {
        return $this->getSpecials() ? (float)$this->getSpecialsNewProductsPrice() : null;
    }

    public function getFinalPriceOrig(): ?float
    {
        return $this->getSpecials() ? (float)$this->getSpecialsNewProductsPrice() : null;
    }

    public function getSpecialsNewProductsPrice(): ?float
    {
        return $this->getSpecials() ? (float)$this->getSpecials()->getSpecialsNewProductsPrice() + $this->getProductsAttributesPrice() : null;
    }

    public function getFinalPrice(): ?float
    {
        return ($this->getSpecials() ? (float)$this->getSpecials()->getSpecialsNewProductsPrice() : (float)$this->productsPrice) + $this->getProductsAttributesPrice();
    }

    public function getProductsName($languages_id = 1): ?string
    {
        if(is_null($this->productsName)){
          foreach($this->productsDescription as $productsDescription){
            if($productsDescription->getLanguageId() == $languages_id){
              $this->productsName = $productsDescription->getProductsName();
            }
          }
        }

        return $this->productsName;
    }

    public function getProductsDescriptionText($languages_id = 1): ?string
    {
        if(is_null($this->productsDescriptionText)){
          foreach($this->productsDescription as $productsDescription){
            if($productsDescription->getLanguageId() == $languages_id){
              $this->productsDescriptionText = $productsDescription->getProductsDescription();
            }
          }
        }

        return $this->productsDescriptionText;
    }

    public function getProductsAttributesPrice(): float
    {
        $attributes_price = 0;

        foreach($this->getAttributes() as $options_id => $options_values_id){
          $attribute_price_relations_rule_found = false;

          $productsAttributes = $this->getProductsAttribute($options_id, $options_values_id);

          foreach($productsAttributes as $productsAttribute){
            $productsAttributesRelations = $productsAttribute->getProductsAttributesRelations();

            if($productsAttributesRelations->count()){
              $iterator = $productsAttributesRelations->getIterator();
              $iterator->uasort(function ($a, $b) {
                return ($a->count() < $b->count()) ? -1 : 1;
              });
              $productsAttributesRelations = new ArrayCollection(iterator_to_array($iterator));

              foreach($productsAttributesRelations as $productsAttributesRelation){
                $attribute_price_relations_rule_found = true;

       		       if(
                   !in_array($productsAttributesRelation->getOptionsId(), array_keys($this->attributes)) ||
                   $productsAttributesRelation->getOptionsValuesId() != $this->attributes[$productsAttributesRelation->getOptionsId()]
                 ){
       		    	   $attribute_price_relations_rule_found = false;

       				     break;
       		       }
               }

               if($attribute_price_relations_rule_found){
                 if ($productsAttribute->getPricePrefix() == '+'){
                   $attributes_price += $productsAttribute->getOptionsValuesPrice();
                 }
                 else {
                   $attributes_price -= $productsAttribute->getOptionsValuesPrice();
                 }

                 break;
               }
             }
           }

           if(!$attribute_price_relations_rule_found){
             foreach($productsAttributes as $productsAttribute){
               $productsAttributesRelations = $productsAttribute->getProductsAttributesRelations();

               if($productsAttributesRelations->count()){
                 continue;
               }

               if ($productsAttribute->getPricePrefix() == '+'){
                 $attributes_price += $productsAttribute->getOptionsValuesPrice();
               }
               else{
                 $attributes_price -= $productsAttribute->getOptionsValuesPrice();
               }

               break;
             }
           }
        }

        return $attributes_price;
    }

    public function setProductsAttributesPrice(float $attributes_price = 0): self
    {
        $this->attributes_price = $attributes_price;

        return $this;
    }

    public function getTaxRate(int $country_id, int $zone_id): float
    {
        $productsTaxRates = [];

        $taxClass = $this->getProductsTaxClass();

        $taxRates = $taxClass->getTaxRates();

        foreach($taxRates as $taxRate){
          $geoZones = $taxRate->getGeoZones();

          $zonesToGeoZones = $geoZones->getZonesToGeoZones();

          foreach($zonesToGeoZones as $zonesToGeoZone){
            if(
              ($zonesToGeoZone->getZoneCountryId() == 0 || $zonesToGeoZone->getZoneCountryId() == $country_id) &&
              ($zonesToGeoZone->getZoneId() == 0 || $zonesToGeoZone->getZoneId() == $zone_id)
            ){
              if(!isset($productsTaxRates[$taxRate->getTaxPriority()])){
                $productsTaxRates[$taxRate->getTaxPriority()] = 0;
              }

              $productsTaxRates[$taxRate->getTaxPriority()] += $taxRate->getTaxRate();
            }
          }
        }

        if(count($productsTaxRates)){
          $tax_multiplier = 1.0;

          foreach($productsTaxRates as $productsTaxRate){
            $tax_multiplier *= 1.0 + ($productsTaxRate / 100);
          }

          $this->taxRate = ($tax_multiplier - 1.0) * 100;
        }

        return $this->taxRate;
    }

    public function addTax(int $country_id, int $zone_id): float
    {
        return $this->getFinalPrice() * (1 + $this->getTaxRate($country_id, $zone_id) / 100);
    }

    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function setProductsPrice(string $productsPrice): self
    {
        $this->productsPrice = $productsPrice;

        return $this;
    }

    public function isSellAmzn(): ?bool
    {
        return $this->sellAmzn;
    }

    public function isSellAmznEu(): ?bool
    {
        return $this->sellAmznEu;
    }

    public function isSellEbay(): ?bool
    {
        return $this->sellEbay;
    }

    public function isSellHouzz(): ?bool
    {
        return $this->sellHouzz;
    }

    public function isSellEtsy(): ?bool
    {
        return $this->sellEtsy;
    }

    public function isProductsStatus(): ?bool
    {
        return $this->productsStatus;
    }

    public function isProductsShipSep(): ?bool
    {
        return $this->productsShipSep;
    }

    public function isNoFlatShip(): ?bool
    {
        return $this->noFlatShip;
    }

    public function is360View(): ?bool
    {
        return $this->_360View;
    }

    public function isAfnQuantity(): ?bool
    {
        return $this->afnQuantity;
    }

    public function setProductsTaxClass(?TaxClass $productsTaxClass): self
    {
        $this->productsTaxClass = $productsTaxClass;

        return $this;
    }

    /**
     * @return Collection<int, ProductsDescription>
     */
    public function getProductsDescription(): Collection
    {
        return $this->productsDescription;
    }

    public function addProductsDescription(ProductsDescription $productsDescription): self
    {
        if (!$this->productsDescription->contains($productsDescription)) {
            $this->productsDescription->add($productsDescription);
            $productsDescription->setProducts($this);
        }

        return $this;
    }

    public function removeProductsDescription(ProductsDescription $productsDescription): self
    {
        if ($this->productsDescription->removeElement($productsDescription)) {
            // set the owning side to null (unless already changed)
            if ($productsDescription->getProducts() === $this) {
                $productsDescription->setProducts(null);
            }
        }

        return $this;
    }

    public function addProductsAttribute(ProductsAttributes $productsAttribute): self
    {
        if (!$this->productsAttributes->contains($productsAttribute)) {
            $this->productsAttributes->add($productsAttribute);
            $productsAttribute->setProducts($this);
        }

        return $this;
    }

    public function removeProductsAttribute(ProductsAttributes $productsAttribute): self
    {
        if ($this->productsAttributes->removeElement($productsAttribute)) {
            // set the owning side to null (unless already changed)
            if ($productsAttribute->getProducts() === $this) {
                $productsAttribute->setProducts(null);
            }
        }

        return $this;
    }

    public function setSpecials(?Specials $specials): self
    {
        // unset the owning side of the relation if necessary
        if ($specials === null && $this->specials !== null) {
            $this->specials->setProducts(null);
        }

        // set the owning side of the relation if necessary
        if ($specials !== null && $specials->getProducts() !== $this) {
            $specials->setProducts($this);
        }

        $this->specials = $specials;

        return $this;
    }

    /**
     * @return Collection<int, ProductsRecommend>
     */
    public function getProductsRecommend(): Collection
    {
        return $this->productsRecommend;
    }

    public function addProductsRecommend(ProductsRecommend $productsRecommend): self
    {
        if (!$this->productsRecommend->contains($productsRecommend)) {
            $this->productsRecommend->add($productsRecommend);
            $productsRecommend->setProducts($this);
        }

        return $this;
    }

    public function removeProductsRecommend(ProductsRecommend $productsRecommend): self
    {
        if ($this->productsRecommend->removeElement($productsRecommend)) {
            // set the owning side to null (unless already changed)
            if ($productsRecommend->getProducts() === $this) {
                $productsRecommend->setProducts(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reviews>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Reviews $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setProducts($this);
        }

        return $this;
    }

    public function removeReview(Reviews $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getProducts() === $this) {
                $review->setProducts(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }

}
