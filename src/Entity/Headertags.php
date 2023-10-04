<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Headertags
 */
#[ORM\Table(name: 'headertags')]
#[ORM\Index(name: 'idx_page_name', columns: ['page_name'])]
#[ORM\Entity]
class Headertags
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'page_name', type: 'string', length: 64, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $pageName;

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = 1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'page_title', type: 'string', length: 120, nullable: true)]
    private $pageTitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'page_description', type: 'string', length: 255, nullable: true)]
    private $pageDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'page_keywords', type: 'string', length: 255, nullable: true)]
    private $pageKeywords;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'page_logo', type: 'string', length: 255, nullable: true)]
    private $pageLogo;

    /**
     * @var string
     */
    #[ORM\Column(name: 'page_logo_1', type: 'string', length: 255, nullable: false)]
    private $pageLogo1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'page_logo_2', type: 'string', length: 255, nullable: false)]
    private $pageLogo2;

    /**
     * @var string
     */
    #[ORM\Column(name: 'page_logo_3', type: 'string', length: 255, nullable: false)]
    private $pageLogo3;

    /**
     * @var string
     */
    #[ORM\Column(name: 'page_logo_4', type: 'string', length: 255, nullable: false)]
    private $pageLogo4;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_default_title', type: 'boolean', nullable: false)]
    private $appendDefaultTitle = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_default_description', type: 'boolean', nullable: false)]
    private $appendDefaultDescription = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_default_keywords', type: 'boolean', nullable: false)]
    private $appendDefaultKeywords = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_default_logo', type: 'boolean', nullable: false)]
    private $appendDefaultLogo = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_category', type: 'boolean', nullable: false)]
    private $appendCategory = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_manufacturer', type: 'boolean', nullable: false)]
    private $appendManufacturer = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_model', type: 'boolean', nullable: false)]
    private $appendModel = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_product', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $appendProduct = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'append_root', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $appendRoot = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_title', type: 'boolean', nullable: false)]
    private $sortorderTitle = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_description', type: 'boolean', nullable: false)]
    private $sortorderDescription = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_keywords', type: 'boolean', nullable: false)]
    private $sortorderKeywords = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_logo', type: 'boolean', nullable: false)]
    private $sortorderLogo = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_category', type: 'boolean', nullable: false)]
    private $sortorderCategory = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_manufacturer', type: 'boolean', nullable: false)]
    private $sortorderManufacturer = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_model', type: 'boolean', nullable: false)]
    private $sortorderModel = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_product', type: 'boolean', nullable: false, options: ['default' => 10])]
    private $sortorderProduct = '10';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_root', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $sortorderRoot = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_root_1', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $sortorderRoot1 = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_root_2', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $sortorderRoot2 = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_root_3', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $sortorderRoot3 = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sortorder_root_4', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $sortorderRoot4 = true;

    public function getPageName(): ?string
    {
        return $this->pageName;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getPageTitle(): ?string
    {
        return $this->pageTitle;
    }

    public function setPageTitle(?string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    public function getPageDescription(): ?string
    {
        return $this->pageDescription;
    }

    public function setPageDescription(?string $pageDescription): self
    {
        $this->pageDescription = $pageDescription;

        return $this;
    }

    public function getPageKeywords(): ?string
    {
        return $this->pageKeywords;
    }

    public function setPageKeywords(?string $pageKeywords): self
    {
        $this->pageKeywords = $pageKeywords;

        return $this;
    }

    public function getPageLogo(): ?string
    {
        return $this->pageLogo;
    }

    public function setPageLogo(?string $pageLogo): self
    {
        $this->pageLogo = $pageLogo;

        return $this;
    }

    public function getPageLogo1(): ?string
    {
        return $this->pageLogo1;
    }

    public function setPageLogo1(string $pageLogo1): self
    {
        $this->pageLogo1 = $pageLogo1;

        return $this;
    }

    public function getPageLogo2(): ?string
    {
        return $this->pageLogo2;
    }

    public function setPageLogo2(string $pageLogo2): self
    {
        $this->pageLogo2 = $pageLogo2;

        return $this;
    }

    public function getPageLogo3(): ?string
    {
        return $this->pageLogo3;
    }

    public function setPageLogo3(string $pageLogo3): self
    {
        $this->pageLogo3 = $pageLogo3;

        return $this;
    }

    public function getPageLogo4(): ?string
    {
        return $this->pageLogo4;
    }

    public function setPageLogo4(string $pageLogo4): self
    {
        $this->pageLogo4 = $pageLogo4;

        return $this;
    }

    public function getAppendDefaultTitle(): ?bool
    {
        return $this->appendDefaultTitle;
    }

    public function setAppendDefaultTitle(bool $appendDefaultTitle): self
    {
        $this->appendDefaultTitle = $appendDefaultTitle;

        return $this;
    }

    public function getAppendDefaultDescription(): ?bool
    {
        return $this->appendDefaultDescription;
    }

    public function setAppendDefaultDescription(bool $appendDefaultDescription): self
    {
        $this->appendDefaultDescription = $appendDefaultDescription;

        return $this;
    }

    public function getAppendDefaultKeywords(): ?bool
    {
        return $this->appendDefaultKeywords;
    }

    public function setAppendDefaultKeywords(bool $appendDefaultKeywords): self
    {
        $this->appendDefaultKeywords = $appendDefaultKeywords;

        return $this;
    }

    public function getAppendDefaultLogo(): ?bool
    {
        return $this->appendDefaultLogo;
    }

    public function setAppendDefaultLogo(bool $appendDefaultLogo): self
    {
        $this->appendDefaultLogo = $appendDefaultLogo;

        return $this;
    }

    public function getAppendCategory(): ?bool
    {
        return $this->appendCategory;
    }

    public function setAppendCategory(bool $appendCategory): self
    {
        $this->appendCategory = $appendCategory;

        return $this;
    }

    public function getAppendManufacturer(): ?bool
    {
        return $this->appendManufacturer;
    }

    public function setAppendManufacturer(bool $appendManufacturer): self
    {
        $this->appendManufacturer = $appendManufacturer;

        return $this;
    }

    public function getAppendModel(): ?bool
    {
        return $this->appendModel;
    }

    public function setAppendModel(bool $appendModel): self
    {
        $this->appendModel = $appendModel;

        return $this;
    }

    public function getAppendProduct(): ?bool
    {
        return $this->appendProduct;
    }

    public function setAppendProduct(bool $appendProduct): self
    {
        $this->appendProduct = $appendProduct;

        return $this;
    }

    public function getAppendRoot(): ?bool
    {
        return $this->appendRoot;
    }

    public function setAppendRoot(bool $appendRoot): self
    {
        $this->appendRoot = $appendRoot;

        return $this;
    }

    public function getSortorderTitle(): ?bool
    {
        return $this->sortorderTitle;
    }

    public function setSortorderTitle(bool $sortorderTitle): self
    {
        $this->sortorderTitle = $sortorderTitle;

        return $this;
    }

    public function getSortorderDescription(): ?bool
    {
        return $this->sortorderDescription;
    }

    public function setSortorderDescription(bool $sortorderDescription): self
    {
        $this->sortorderDescription = $sortorderDescription;

        return $this;
    }

    public function getSortorderKeywords(): ?bool
    {
        return $this->sortorderKeywords;
    }

    public function setSortorderKeywords(bool $sortorderKeywords): self
    {
        $this->sortorderKeywords = $sortorderKeywords;

        return $this;
    }

    public function getSortorderLogo(): ?bool
    {
        return $this->sortorderLogo;
    }

    public function setSortorderLogo(bool $sortorderLogo): self
    {
        $this->sortorderLogo = $sortorderLogo;

        return $this;
    }

    public function getSortorderCategory(): ?bool
    {
        return $this->sortorderCategory;
    }

    public function setSortorderCategory(bool $sortorderCategory): self
    {
        $this->sortorderCategory = $sortorderCategory;

        return $this;
    }

    public function getSortorderManufacturer(): ?bool
    {
        return $this->sortorderManufacturer;
    }

    public function setSortorderManufacturer(bool $sortorderManufacturer): self
    {
        $this->sortorderManufacturer = $sortorderManufacturer;

        return $this;
    }

    public function getSortorderModel(): ?bool
    {
        return $this->sortorderModel;
    }

    public function setSortorderModel(bool $sortorderModel): self
    {
        $this->sortorderModel = $sortorderModel;

        return $this;
    }

    public function getSortorderProduct(): ?bool
    {
        return $this->sortorderProduct;
    }

    public function setSortorderProduct(bool $sortorderProduct): self
    {
        $this->sortorderProduct = $sortorderProduct;

        return $this;
    }

    public function getSortorderRoot(): ?bool
    {
        return $this->sortorderRoot;
    }

    public function setSortorderRoot(bool $sortorderRoot): self
    {
        $this->sortorderRoot = $sortorderRoot;

        return $this;
    }

    public function getSortorderRoot1(): ?bool
    {
        return $this->sortorderRoot1;
    }

    public function setSortorderRoot1(bool $sortorderRoot1): self
    {
        $this->sortorderRoot1 = $sortorderRoot1;

        return $this;
    }

    public function getSortorderRoot2(): ?bool
    {
        return $this->sortorderRoot2;
    }

    public function setSortorderRoot2(bool $sortorderRoot2): self
    {
        $this->sortorderRoot2 = $sortorderRoot2;

        return $this;
    }

    public function getSortorderRoot3(): ?bool
    {
        return $this->sortorderRoot3;
    }

    public function setSortorderRoot3(bool $sortorderRoot3): self
    {
        $this->sortorderRoot3 = $sortorderRoot3;

        return $this;
    }

    public function getSortorderRoot4(): ?bool
    {
        return $this->sortorderRoot4;
    }

    public function setSortorderRoot4(bool $sortorderRoot4): self
    {
        $this->sortorderRoot4 = $sortorderRoot4;

        return $this;
    }


}
