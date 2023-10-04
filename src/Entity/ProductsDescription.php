<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsDescription
 */
#[ORM\Table(name: 'products_description')]
#[ORM\Index(name: 'products_name', columns: ['products_name'])]
#[ORM\Entity(repositoryClass: 'App\Repository\ProductsDescriptionRepository')]
class ProductsDescription
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_name', type: 'string', length: 128, nullable: false)]
    private $productsName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_description', type: 'text', length: 65535, nullable: true)]
    private $productsDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_qna', type: 'text', length: 65535, nullable: true)]
    private $productsQna;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_qna_video', type: 'string', length: 64, nullable: true)]
    private $productsQnaVideo;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_qna_hd_link', type: 'string', length: 255, nullable: true)]
    private $productsQnaHdLink;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_qna_text', type: 'text', length: 65535, nullable: true)]
    private $productsQnaText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_qna_poster_url', type: 'string', length: 255, nullable: true)]
    private $productsQnaPosterUrl;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_video', type: 'string', length: 64, nullable: true)]
    private $productsVideo = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_url', type: 'string', length: 255, nullable: true)]
    private $productsUrl;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'products_viewed', type: 'integer', nullable: true)]
    private $productsViewed = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_head_title_tag', type: 'text', length: 0, nullable: true)]
    private $productsHeadTitleTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_head_desc_tag', type: 'text', length: 0, nullable: true)]
    private $productsHeadDescTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_head_keywords_tag', type: 'text', length: 0, nullable: true)]
    private $productsHeadKeywordsTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_marketing_category', type: 'string', length: 255, nullable: true)]
    private $productsMarketingCategory;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_taxonomy', type: 'string', length: 255, nullable: true)]
    private $productsTaxonomy;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_marketing_name', type: 'string', length: 128, nullable: true)]
    private $productsMarketingName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_reorder_code', type: 'string', length: 255, nullable: false)]
    private $productsReorderCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_reorder_name', type: 'string', length: 255, nullable: true)]
    private $productsReorderName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_reorder_price', type: 'decimal', precision: 15, scale: 4, nullable: true)]
    private $productsReorderPrice;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_gender', type: 'string', length: 6, nullable: true)]
    private $productsGender;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_age_group', type: 'string', length: 5, nullable: true)]
    private $productsAgeGroup;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'products_color', type: 'string', length: 255, nullable: true)]
    private $productsColor;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Products', inversedBy: 'productsDescription')]
    #[ORM\JoinColumn(name: 'products_id', referencedColumnName: 'products_id')]
    private $products;

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
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

    public function getProductsDescription(): ?string
    {
        return $this->productsDescription;
    }

    public function setProductsDescription(?string $productsDescription): self
    {
        $this->productsDescription = $productsDescription;

        return $this;
    }

    public function getProductsQna(): ?string
    {
        return $this->productsQna;
    }

    public function setProductsQna(?string $productsQna): self
    {
        $this->productsQna = $productsQna;

        return $this;
    }

    public function getProductsQnaVideo(): ?string
    {
        return $this->productsQnaVideo;
    }

    public function setProductsQnaVideo(?string $productsQnaVideo): self
    {
        $this->productsQnaVideo = $productsQnaVideo;

        return $this;
    }

    public function getProductsQnaHdLink(): ?string
    {
        return $this->productsQnaHdLink;
    }

    public function setProductsQnaHdLink(?string $productsQnaHdLink): self
    {
        $this->productsQnaHdLink = $productsQnaHdLink;

        return $this;
    }

    public function getProductsQnaText(): ?string
    {
        return $this->productsQnaText;
    }

    public function setProductsQnaText(?string $productsQnaText): self
    {
        $this->productsQnaText = $productsQnaText;

        return $this;
    }

    public function getProductsQnaPosterUrl(): ?string
    {
        return $this->productsQnaPosterUrl;
    }

    public function setProductsQnaPosterUrl(?string $productsQnaPosterUrl): self
    {
        $this->productsQnaPosterUrl = $productsQnaPosterUrl;

        return $this;
    }

    public function getProductsVideo(): ?string
    {
        return $this->productsVideo;
    }

    public function setProductsVideo(?string $productsVideo): self
    {
        $this->productsVideo = $productsVideo;

        return $this;
    }

    public function getProductsUrl(): ?string
    {
        return $this->productsUrl;
    }

    public function setProductsUrl(?string $productsUrl): self
    {
        $this->productsUrl = $productsUrl;

        return $this;
    }

    public function getProductsViewed(): ?int
    {
        return $this->productsViewed;
    }

    public function setProductsViewed(?int $productsViewed): self
    {
        $this->productsViewed = $productsViewed;

        return $this;
    }

    public function getProductsHeadTitleTag(): ?string
    {
        return $this->productsHeadTitleTag;
    }

    public function setProductsHeadTitleTag(?string $productsHeadTitleTag): self
    {
        $this->productsHeadTitleTag = $productsHeadTitleTag;

        return $this;
    }

    public function getProductsHeadDescTag(): ?string
    {
        return $this->productsHeadDescTag;
    }

    public function setProductsHeadDescTag(?string $productsHeadDescTag): self
    {
        $this->productsHeadDescTag = $productsHeadDescTag;

        return $this;
    }

    public function getProductsHeadKeywordsTag(): ?string
    {
        return $this->productsHeadKeywordsTag;
    }

    public function setProductsHeadKeywordsTag(?string $productsHeadKeywordsTag): self
    {
        $this->productsHeadKeywordsTag = $productsHeadKeywordsTag;

        return $this;
    }

    public function getProductsMarketingCategory(): ?string
    {
        return $this->productsMarketingCategory;
    }

    public function setProductsMarketingCategory(?string $productsMarketingCategory): self
    {
        $this->productsMarketingCategory = $productsMarketingCategory;

        return $this;
    }

    public function getProductsTaxonomy(): ?string
    {
        return $this->productsTaxonomy;
    }

    public function setProductsTaxonomy(?string $productsTaxonomy): self
    {
        $this->productsTaxonomy = $productsTaxonomy;

        return $this;
    }

    public function getProductsMarketingName(): ?string
    {
        return $this->productsMarketingName;
    }

    public function setProductsMarketingName(?string $productsMarketingName): self
    {
        $this->productsMarketingName = $productsMarketingName;

        return $this;
    }

    public function getProductsReorderCode(): ?string
    {
        return $this->productsReorderCode;
    }

    public function setProductsReorderCode(string $productsReorderCode): self
    {
        $this->productsReorderCode = $productsReorderCode;

        return $this;
    }

    public function getProductsReorderName(): ?string
    {
        return $this->productsReorderName;
    }

    public function setProductsReorderName(?string $productsReorderName): self
    {
        $this->productsReorderName = $productsReorderName;

        return $this;
    }

    public function getProductsReorderPrice(): ?string
    {
        return $this->productsReorderPrice;
    }

    public function setProductsReorderPrice(?string $productsReorderPrice): self
    {
        $this->productsReorderPrice = $productsReorderPrice;

        return $this;
    }

    public function getProductsGender(): ?string
    {
        return $this->productsGender;
    }

    public function setProductsGender(?string $productsGender): self
    {
        $this->productsGender = $productsGender;

        return $this;
    }

    public function getProductsAgeGroup(): ?string
    {
        return $this->productsAgeGroup;
    }

    public function setProductsAgeGroup(?string $productsAgeGroup): self
    {
        $this->productsAgeGroup = $productsAgeGroup;

        return $this;
    }

    public function getProductsColor(): ?string
    {
        return $this->productsColor;
    }

    public function setProductsColor(?string $productsColor): self
    {
        $this->productsColor = $productsColor;

        return $this;
    }


}
