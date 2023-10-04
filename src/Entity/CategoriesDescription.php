<?php

namespace App\Entity;

use App\Entity\Categories;
use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesDescription
 */
#[ORM\Table(name: 'categories_description')]
#[ORM\Index(name: 'idx_categories_name', columns: ['categories_name'])]
#[ORM\Entity(repositoryClass: 'App\Repository\CategoriesDescriptionRepository')]
class CategoriesDescription
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'categories_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $categoriesId = '0';

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
    #[ORM\Column(name: 'categories_name', type: 'string', length: 32, nullable: false)]
    private $categoriesName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_h1', type: 'string', length: 64, nullable: true)]
    private $categoriesH1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_url', type: 'string', length: 512, nullable: true)]
    private $categoriesUrl;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_htc_title_tag', type: 'text', length: 0, nullable: true)]
    private $categoriesHtcTitleTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_htc_desc_tag', type: 'text', length: 0, nullable: true)]
    private $categoriesHtcDescTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_htc_keywords_tag', type: 'text', length: 0, nullable: true)]
    private $categoriesHtcKeywordsTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_htc_description', type: 'text', length: 0, nullable: true)]
    private $categoriesHtcDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_desc_text', type: 'text', length: 0, nullable: true)]
    private $categoriesDescText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_footer_text', type: 'text', length: 0, nullable: true)]
    private $categoriesFooterText;
    
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Categories', inversedBy: 'categoriesDescription')]
    #[ORM\JoinColumn(name: 'categories_id', referencedColumnName: 'categories_id')]
    private $categories;    

    public function getCategoriesId(): ?int
    {
        return $this->categoriesId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getCategoriesName(): ?string
    {
        return $this->categoriesName;
    }

    public function setCategoriesName(string $categoriesName): self
    {
        $this->categoriesName = $categoriesName;

        return $this;
    }

    public function getCategoriesH1(): ?string
    {
        return $this->categoriesH1;
    }

    public function setCategoriesH1(?string $categoriesH1): self
    {
        $this->categoriesH1 = $categoriesH1;

        return $this;
    }

    public function getCategoriesUrl(): ?string
    {
        return $this->categoriesUrl;
    }

    public function setCategoriesUrl(?string $categoriesUrl): self
    {
        $this->categoriesUrl = $categoriesUrl;

        return $this;
    }

    public function getCategoriesHtcTitleTag(): ?string
    {
        return $this->categoriesHtcTitleTag;
    }

    public function setCategoriesHtcTitleTag(?string $categoriesHtcTitleTag): self
    {
        $this->categoriesHtcTitleTag = $categoriesHtcTitleTag;

        return $this;
    }

    public function getCategoriesHtcDescTag(): ?string
    {
        return $this->categoriesHtcDescTag;
    }

    public function setCategoriesHtcDescTag(?string $categoriesHtcDescTag): self
    {
        $this->categoriesHtcDescTag = $categoriesHtcDescTag;

        return $this;
    }

    public function getCategoriesHtcKeywordsTag(): ?string
    {
        return $this->categoriesHtcKeywordsTag;
    }

    public function setCategoriesHtcKeywordsTag(?string $categoriesHtcKeywordsTag): self
    {
        $this->categoriesHtcKeywordsTag = $categoriesHtcKeywordsTag;

        return $this;
    }

    public function getCategoriesHtcDescription(): ?string
    {
        return $this->categoriesHtcDescription;
    }

    public function setCategoriesHtcDescription(?string $categoriesHtcDescription): self
    {
        $this->categoriesHtcDescription = $categoriesHtcDescription;

        return $this;
    }

    public function getCategoriesDescText(): ?string
    {
        return $this->categoriesDescText;
    }

    public function setCategoriesDescText(?string $categoriesDescText): self
    {
        $this->categoriesDescText = $categoriesDescText;

        return $this;
    }

    public function getCategoriesFooterText(): ?string
    {
        return $this->categoriesFooterText;
    }

    public function setCategoriesFooterText(?string $categoriesFooterText): self
    {
        $this->categoriesFooterText = $categoriesFooterText;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categoriesFooterText;
    }

    public function setCategories(Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }
}
