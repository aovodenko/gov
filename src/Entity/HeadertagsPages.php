<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * HeadertagsPages
 */
#[ORM\Table(name: 'headertags_pages')]
#[ORM\UniqueConstraint(name: 'pages_name', columns: ['pages_name'])]
#[ORM\Entity(repositoryClass: 'App\Repository\HeadertagsPagesRepository')]
class HeadertagsPages
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'pages_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $pagesId;

    /**
      * @var string
      */
     #[ORM\Column(name: 'route', type: 'string', length: 80, nullable: false)]
     private $route;

    /**
     * @var string
     */
    #[ORM\Column(name: 'pages_name', type: 'string', length: 80, nullable: false)]
    private $pagesName;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: true, options: ['default' => 1])]
    private $languageId = 1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'pages_head_title_tag', type: 'text', length: 0, nullable: true)]
    private $pagesHeadTitleTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'pages_head_desc_tag', type: 'text', length: 0, nullable: true)]
    private $pagesHeadDescTag;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'pages_head_keywords_tag', type: 'text', length: 0, nullable: true)]
    private $pagesHeadKeywordsTag;

    public function getPagesId(): ?int
    {
        return $this->pagesId;
    }

    public function getRoute(): ?string
    {
        return $this->route;
    }

    public function setRoute(string $route): self
    {
        $this->route = $route;

        return $this;
    }

    public function getPagesName(): ?string
    {
        return $this->pagesName;
    }

    public function setPagesName(string $pagesName): self
    {
        $this->pagesName = $pagesName;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(?int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getPagesHeadTitleTag(): ?string
    {
        return $this->pagesHeadTitleTag;
    }

    public function setPagesHeadTitleTag(?string $pagesHeadTitleTag): self
    {
        $this->pagesHeadTitleTag = $pagesHeadTitleTag;

        return $this;
    }

    public function getPagesHeadDescTag(): ?string
    {
        return $this->pagesHeadDescTag;
    }

    public function setPagesHeadDescTag(?string $pagesHeadDescTag): self
    {
        $this->pagesHeadDescTag = $pagesHeadDescTag;

        return $this;
    }

    public function getPagesHeadKeywordsTag(): ?string
    {
        return $this->pagesHeadKeywordsTag;
    }

    public function setPagesHeadKeywordsTag(?string $pagesHeadKeywordsTag): self
    {
        $this->pagesHeadKeywordsTag = $pagesHeadKeywordsTag;

        return $this;
    }


}
