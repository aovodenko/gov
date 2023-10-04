<?php

namespace App\Entity;

use App\Entity\Sliders;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * SlidersImages
 */
#[ORM\Table(name: 'sliders_images')]
#[ORM\Entity(repositoryClass: 'App\Repository\SlidersImagesRepository')]
class SlidersImages
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'sliders_images_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $slidersImagesId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'sliders_id', type: 'integer', nullable: false)]
    private $slidersId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sliders_images', type: 'string', length: 512, nullable: true)]
    #[ORM\OrderBy(['sort_order' => 'ASC'])]
    private $slidersImages;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'sliders_images_status', type: 'boolean', nullable: true)]
    private $slidersImagesStatus = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_start', type: 'datetime', nullable: true)]
    private $dateStart;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_end', type: 'datetime', nullable: true)]
    private $dateEnd;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'alt_text', type: 'string', length: 1024, nullable: true)]
    private $altText;

    #[ORM\ManyToOne(inversedBy: 'slidersImages', targetEntity: Sliders::class)]
    #[ORM\JoinColumn(name: 'sliders_id', referencedColumnName: 'sliders_id', nullable: false)]
    private ?Sliders $sliders = null;

    #[ORM\OneToMany(mappedBy: 'slidersImages', targetEntity: SlidersImagesLinks::class, orphanRemoval: true)]
    private Collection $slidersImagesLinks;

    public function __construct()
    {
        $this->slidersImagesLinks = new ArrayCollection();
    }

    public function getSlidersImagesId(): ?int
    {
        return $this->slidersImagesId;
    }

    public function getSlidersId(): ?int
    {
        return $this->slidersId;
    }

    public function setSlidersId(int $slidersId): self
    {
        $this->slidersId = $slidersId;

        return $this;
    }

    public function getSlidersImages(): ?string
    {
        return $this->slidersImages;
    }

    public function setSlidersImages(?string $slidersImages): self
    {
        $this->slidersImages = $slidersImages;

        return $this;
    }

    public function getSlidersImagesStatus(): ?bool
    {
        return $this->slidersImagesStatus;
    }

    public function setSlidersImagesStatus(?bool $slidersImagesStatus): self
    {
        $this->slidersImagesStatus = $slidersImagesStatus;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(?int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(?\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getAltText(): ?string
    {
        return $this->altText;
    }

    public function setAltText(?string $altText): self
    {
        $this->altText = $altText;

        return $this;
    }

    public function getSliders(): ?Sliders
    {
        return $this->sliders;
    }

    public function setSliders(?Sliders $sliders): self
    {
        $this->sliders = $sliders;

        return $this;
    }

    /**
     * @return Collection<int, SlidersImagesLinks>
     */
    public function getSlidersImagesLinks(): Collection
    {
        return $this->slidersImagesLinks;
    }

    public function addSlidersImagesLink(SlidersImagesLinks $slidersImagesLink): self
    {
        if (!$this->slidersImagesLinks->contains($slidersImagesLink)) {
            $this->slidersImagesLinks->add($slidersImagesLink);
            $slidersImagesLink->setSlidersImages($this);
        }

        return $this;
    }

    public function removeSlidersImagesLink(SlidersImagesLinks $slidersImagesLink): self
    {
        if ($this->slidersImagesLinks->removeElement($slidersImagesLink)) {
            // set the owning side to null (unless already changed)
            if ($slidersImagesLink->getSlidersImages() === $this) {
                $slidersImagesLink->setSlidersImages(null);
            }
        }

        return $this;
    }

    public function isSlidersImagesStatus(): ?bool
    {
        return $this->slidersImagesStatus;
    }


}
