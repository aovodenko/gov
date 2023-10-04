<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cache
 */
#[ORM\Table(name: 'cache')]
#[ORM\Index(name: 'cache_global', columns: ['cache_global'])]
#[ORM\Index(name: 'cache_id', columns: ['cache_id'])]
#[ORM\Index(name: 'cache_language_id', columns: ['cache_language_id'])]
#[ORM\Entity]
class Cache
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'cache_id', type: 'string', length: 32, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $cacheId;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'cache_language_id', type: 'boolean', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $cacheLanguageId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'cache_name', type: 'string', length: 255, nullable: false)]
    private $cacheName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'cache_data', type: 'text', length: 16777215, nullable: false)]
    private $cacheData;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'cache_global', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $cacheGlobal = true;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'cache_gzip', type: 'boolean', nullable: false, options: ['default' => 1])]
    private $cacheGzip = true;

    /**
     * @var string
     */
    #[ORM\Column(name: 'cache_method', type: 'string', length: 20, nullable: false, options: ['default' => 'RETURN'])]
    private $cacheMethod = 'RETURN';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'cache_date', type: 'datetime', nullable: false)]
    private $cacheDate;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'cache_expires', type: 'datetime', nullable: false)]
    private $cacheExpires;

    public function getCacheId(): ?string
    {
        return $this->cacheId;
    }

    public function getCacheLanguageId(): ?bool
    {
        return $this->cacheLanguageId;
    }

    public function getCacheName(): ?string
    {
        return $this->cacheName;
    }

    public function setCacheName(string $cacheName): self
    {
        $this->cacheName = $cacheName;

        return $this;
    }

    public function getCacheData(): ?string
    {
        return $this->cacheData;
    }

    public function setCacheData(string $cacheData): self
    {
        $this->cacheData = $cacheData;

        return $this;
    }

    public function getCacheGlobal(): ?bool
    {
        return $this->cacheGlobal;
    }

    public function setCacheGlobal(bool $cacheGlobal): self
    {
        $this->cacheGlobal = $cacheGlobal;

        return $this;
    }

    public function getCacheGzip(): ?bool
    {
        return $this->cacheGzip;
    }

    public function setCacheGzip(bool $cacheGzip): self
    {
        $this->cacheGzip = $cacheGzip;

        return $this;
    }

    public function getCacheMethod(): ?string
    {
        return $this->cacheMethod;
    }

    public function setCacheMethod(string $cacheMethod): self
    {
        $this->cacheMethod = $cacheMethod;

        return $this;
    }

    public function getCacheDate(): ?\DateTimeInterface
    {
        return $this->cacheDate;
    }

    public function setCacheDate(\DateTimeInterface $cacheDate): self
    {
        $this->cacheDate = $cacheDate;

        return $this;
    }

    public function getCacheExpires(): ?\DateTimeInterface
    {
        return $this->cacheExpires;
    }

    public function setCacheExpires(\DateTimeInterface $cacheExpires): self
    {
        $this->cacheExpires = $cacheExpires;

        return $this;
    }


}
