<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznProductsDescription
 */
#[ORM\Table(name: 'amzn_products_description')]
#[ORM\Entity]
class AmznProductsDescription
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'product_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productId;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'language_id', type: 'boolean', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = true;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'string', length: 255, nullable: true)]
    private $title;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'description', type: 'text', length: 65535, nullable: true)]
    private $description;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet1', type: 'string', length: 255, nullable: true)]
    private $bullet1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet2', type: 'string', length: 255, nullable: true)]
    private $bullet2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet2_metric', type: 'string', length: 255, nullable: true)]
    private $bullet2Metric;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet3', type: 'string', length: 255, nullable: true)]
    private $bullet3;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet4', type: 'string', length: 255, nullable: true)]
    private $bullet4;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'bullet5', type: 'string', length: 255, nullable: true)]
    private $bullet5;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'processed', type: 'boolean', nullable: false)]
    private $processed = '0';

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getLanguageId(): ?bool
    {
        return $this->languageId;
    }

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

    public function getProcessed(): ?bool
    {
        return $this->processed;
    }

    public function setProcessed(bool $processed): self
    {
        $this->processed = $processed;

        return $this;
    }


}
