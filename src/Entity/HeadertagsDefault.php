<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeadertagsDefault
 */
#[ORM\Table(name: 'headertags_default')]
#[ORM\Index(name: 'idx_default_title', columns: ['default_title'])]
#[ORM\Entity(repositoryClass: 'App\Repository\HeadertagsDefaultRepository')]
class HeadertagsDefault
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'default_title', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $defaultTitle;

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
    #[ORM\Column(name: 'default_description', type: 'string', length: 255, nullable: true)]
    private $defaultDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'default_keywords', type: 'string', length: 255, nullable: true)]
    private $defaultKeywords;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'default_logo_text', type: 'string', length: 255, nullable: true)]
    private $defaultLogoText;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'default_logo_append_group', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $defaultLogoAppendGroup = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'default_logo_append_category', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $defaultLogoAppendCategory = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'default_logo_append_manufacturer', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $defaultLogoAppendManufacturer = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'default_logo_append_product', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $defaultLogoAppendProduct = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_google', type: 'boolean', nullable: false)]
    private $metaGoogle = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_language', type: 'boolean', nullable: false)]
    private $metaLanguage = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_noodp', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $metaNoodp = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_noydir', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $metaNoydir = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_replyto', type: 'boolean', nullable: false)]
    private $metaReplyto = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_revisit', type: 'boolean', nullable: false)]
    private $metaRevisit = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_robots', type: 'boolean', nullable: false)]
    private $metaRobots = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_unspam', type: 'boolean', nullable: false)]
    private $metaUnspam = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'meta_canonical', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $metaCanonical = true;

    public function getDefaultTitle(): ?string
    {
        return $this->defaultTitle;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getDefaultDescription(): ?string
    {
        return $this->defaultDescription;
    }

    public function setDefaultDescription(?string $defaultDescription): self
    {
        $this->defaultDescription = $defaultDescription;

        return $this;
    }

    public function getDefaultKeywords(): ?string
    {
        return $this->defaultKeywords;
    }

    public function setDefaultKeywords(?string $defaultKeywords): self
    {
        $this->defaultKeywords = $defaultKeywords;

        return $this;
    }

    public function getDefaultLogoText(): ?string
    {
        return $this->defaultLogoText;
    }

    public function setDefaultLogoText(?string $defaultLogoText): self
    {
        $this->defaultLogoText = $defaultLogoText;

        return $this;
    }

    public function getDefaultLogoAppendGroup(): ?bool
    {
        return $this->defaultLogoAppendGroup;
    }

    public function setDefaultLogoAppendGroup(bool $defaultLogoAppendGroup): self
    {
        $this->defaultLogoAppendGroup = $defaultLogoAppendGroup;

        return $this;
    }

    public function getDefaultLogoAppendCategory(): ?bool
    {
        return $this->defaultLogoAppendCategory;
    }

    public function setDefaultLogoAppendCategory(bool $defaultLogoAppendCategory): self
    {
        $this->defaultLogoAppendCategory = $defaultLogoAppendCategory;

        return $this;
    }

    public function getDefaultLogoAppendManufacturer(): ?bool
    {
        return $this->defaultLogoAppendManufacturer;
    }

    public function setDefaultLogoAppendManufacturer(bool $defaultLogoAppendManufacturer): self
    {
        $this->defaultLogoAppendManufacturer = $defaultLogoAppendManufacturer;

        return $this;
    }

    public function getDefaultLogoAppendProduct(): ?bool
    {
        return $this->defaultLogoAppendProduct;
    }

    public function setDefaultLogoAppendProduct(bool $defaultLogoAppendProduct): self
    {
        $this->defaultLogoAppendProduct = $defaultLogoAppendProduct;

        return $this;
    }

    public function getMetaGoogle(): ?bool
    {
        return $this->metaGoogle;
    }

    public function setMetaGoogle(bool $metaGoogle): self
    {
        $this->metaGoogle = $metaGoogle;

        return $this;
    }

    public function getMetaLanguage(): ?bool
    {
        return $this->metaLanguage;
    }

    public function setMetaLanguage(bool $metaLanguage): self
    {
        $this->metaLanguage = $metaLanguage;

        return $this;
    }

    public function getMetaNoodp(): ?bool
    {
        return $this->metaNoodp;
    }

    public function setMetaNoodp(bool $metaNoodp): self
    {
        $this->metaNoodp = $metaNoodp;

        return $this;
    }

    public function getMetaNoydir(): ?bool
    {
        return $this->metaNoydir;
    }

    public function setMetaNoydir(bool $metaNoydir): self
    {
        $this->metaNoydir = $metaNoydir;

        return $this;
    }

    public function getMetaReplyto(): ?bool
    {
        return $this->metaReplyto;
    }

    public function setMetaReplyto(bool $metaReplyto): self
    {
        $this->metaReplyto = $metaReplyto;

        return $this;
    }

    public function getMetaRevisit(): ?bool
    {
        return $this->metaRevisit;
    }

    public function setMetaRevisit(bool $metaRevisit): self
    {
        $this->metaRevisit = $metaRevisit;

        return $this;
    }

    public function getMetaRobots(): ?bool
    {
        return $this->metaRobots;
    }

    public function setMetaRobots(bool $metaRobots): self
    {
        $this->metaRobots = $metaRobots;

        return $this;
    }

    public function getMetaUnspam(): ?bool
    {
        return $this->metaUnspam;
    }

    public function setMetaUnspam(bool $metaUnspam): self
    {
        $this->metaUnspam = $metaUnspam;

        return $this;
    }

    public function getMetaCanonical(): ?bool
    {
        return $this->metaCanonical;
    }

    public function setMetaCanonical(bool $metaCanonical): self
    {
        $this->metaCanonical = $metaCanonical;

        return $this;
    }

    public function isDefaultLogoAppendGroup(): ?bool
    {
        return $this->defaultLogoAppendGroup;
    }

    public function isDefaultLogoAppendCategory(): ?bool
    {
        return $this->defaultLogoAppendCategory;
    }

    public function isDefaultLogoAppendManufacturer(): ?bool
    {
        return $this->defaultLogoAppendManufacturer;
    }

    public function isDefaultLogoAppendProduct(): ?bool
    {
        return $this->defaultLogoAppendProduct;
    }

    public function isMetaGoogle(): ?bool
    {
        return $this->metaGoogle;
    }

    public function isMetaLanguage(): ?bool
    {
        return $this->metaLanguage;
    }

    public function isMetaNoodp(): ?bool
    {
        return $this->metaNoodp;
    }

    public function isMetaNoydir(): ?bool
    {
        return $this->metaNoydir;
    }

    public function isMetaReplyto(): ?bool
    {
        return $this->metaReplyto;
    }

    public function isMetaRevisit(): ?bool
    {
        return $this->metaRevisit;
    }

    public function isMetaRobots(): ?bool
    {
        return $this->metaRobots;
    }

    public function isMetaUnspam(): ?bool
    {
        return $this->metaUnspam;
    }

    public function isMetaCanonical(): ?bool
    {
        return $this->metaCanonical;
    }


}
