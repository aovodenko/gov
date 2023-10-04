<?php

namespace App\Entity;

use App\Entity\SlidersImages;
use Doctrine\ORM\Mapping as ORM;

/**
 * SlidersImagesLinks
 */
#[ORM\Table(name: 'sliders_images_links')]
#[ORM\Entity(repositoryClass: 'App\Repository\SlidersImagesLinksRepository')]
class SlidersImagesLinks
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'sliders_images_links_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $slidersImagesLinksId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_id', type: 'integer', nullable: true)]
    private $slidersId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_images_id', type: 'integer', nullable: true)]
    private $slidersImagesId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_images_links_x1', type: 'integer', nullable: true)]
    private $slidersImagesLinksX1 = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_images_links_y1', type: 'integer', nullable: true)]
    private $slidersImagesLinksY1 = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_images_links_x2', type: 'integer', nullable: true)]
    private $slidersImagesLinksX2 = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_images_links_y2', type: 'integer', nullable: true)]
    private $slidersImagesLinksY2 = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sliders_images_links_url', type: 'string', length: 512, nullable: true)]
    private $slidersImagesLinksUrl = '';

    #[ORM\ManyToOne(inversedBy: 'slidersImagesLinks', targetEntity: SlidersImages::class)]
    #[ORM\JoinColumn(name: 'sliders_images_id', referencedColumnName: 'sliders_images_id', nullable: false)]
    private ?SlidersImages $slidersImages = null;

    public function getSlidersImagesLinksId(): ?int
    {
        return $this->slidersImagesLinksId;
    }

    public function getSlidersId(): ?int
    {
        return $this->slidersId;
    }

    public function setSlidersId(?int $slidersId): self
    {
        $this->slidersId = $slidersId;

        return $this;
    }

    public function getSlidersImagesId(): ?int
    {
        return $this->slidersImagesId;
    }

    public function setSlidersImagesId(?int $slidersImagesId): self
    {
        $this->slidersImagesId = $slidersImagesId;

        return $this;
    }

    public function getSlidersImagesLinksX1(): ?int
    {
        return $this->slidersImagesLinksX1;
    }

    public function setSlidersImagesLinksX1(?int $slidersImagesLinksX1): self
    {
        $this->slidersImagesLinksX1 = $slidersImagesLinksX1;

        return $this;
    }

    public function getSlidersImagesLinksY1(): ?int
    {
        return $this->slidersImagesLinksY1;
    }

    public function setSlidersImagesLinksY1(?int $slidersImagesLinksY1): self
    {
        $this->slidersImagesLinksY1 = $slidersImagesLinksY1;

        return $this;
    }

    public function getSlidersImagesLinksX2(): ?int
    {
        return $this->slidersImagesLinksX2;
    }

    public function setSlidersImagesLinksX2(?int $slidersImagesLinksX2): self
    {
        $this->slidersImagesLinksX2 = $slidersImagesLinksX2;

        return $this;
    }

    public function getSlidersImagesLinksY2(): ?int
    {
        return $this->slidersImagesLinksY2;
    }

    public function setSlidersImagesLinksY2(?int $slidersImagesLinksY2): self
    {
        $this->slidersImagesLinksY2 = $slidersImagesLinksY2;

        return $this;
    }

    public function getSlidersImagesLinksUrl(): ?string
    {
        return $this->slidersImagesLinksUrl;
    }

    public function setSlidersImagesLinksUrl(?string $slidersImagesLinksUrl): self
    {
        $this->slidersImagesLinksUrl = $slidersImagesLinksUrl;

        return $this;
    }

    public function getSlidersImages(): ?SlidersImages
    {
        return $this->slidersImages;
    }

    public function setSlidersImages(?SlidersImages $slidersImages): self
    {
        $this->slidersImages = $slidersImages;

        return $this;
    }


}
