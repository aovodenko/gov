<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CacheFilters
 */
#[ORM\Table(name: 'cache_filters')]
#[ORM\Entity]
class CacheFilters
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'cache_id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $cacheId;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'language_id', type: 'boolean', nullable: true, options: ['default' => 1])]
    private $languageId = true;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cpath', type: 'string', length: 512, nullable: true)]
    private $cpath = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'filters_path', type: 'string', length: 512, nullable: true)]
    private $filtersPath;

    /**
     * @var string
     */
    #[ORM\Column(name: 'cache_object', type: 'text', length: 65535, nullable: false)]
    private $cacheObject;

    public function getCacheId(): ?string
    {
        return $this->cacheId;
    }

    public function getLanguageId(): ?bool
    {
        return $this->languageId;
    }

    public function setLanguageId(?bool $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getCpath(): ?string
    {
        return $this->cpath;
    }

    public function setCpath(?string $cpath): self
    {
        $this->cpath = $cpath;

        return $this;
    }

    public function getFiltersPath(): ?string
    {
        return $this->filtersPath;
    }

    public function setFiltersPath(?string $filtersPath): self
    {
        $this->filtersPath = $filtersPath;

        return $this;
    }

    public function getCacheObject(): ?string
    {
        return $this->cacheObject;
    }

    public function setCacheObject(string $cacheObject): self
    {
        $this->cacheObject = $cacheObject;

        return $this;
    }


}
