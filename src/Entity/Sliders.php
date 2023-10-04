<?php

namespace App\Entity;

use App\Entity\SlidersDescription;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sliders
 */
#[ORM\Table(name: 'sliders')]
#[ORM\Entity(repositoryClass: 'App\Repository\SlidersRepository')]
class Sliders
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'sliders_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $slidersId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sliders_alias', type: 'string', length: 512, nullable: true)]
    private $slidersAlias = '';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_delay', type: 'integer', nullable: true)]
    private $slidersDelay;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_nav_top', type: 'integer', nullable: true)]
    private $slidersNavTop;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_nav_left', type: 'integer', nullable: true)]
    private $slidersNavLeft;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'thumbnav', type: 'integer', nullable: true)]
    private $thumbnav = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'category', type: 'integer', nullable: true)]
    private $category = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'height', type: 'integer', nullable: true)]
    private $height;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true)]
    private $dateAdded;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;

    #[ORM\OneToMany(mappedBy: 'sliders', targetEntity: SlidersDescription::class, orphanRemoval: true)]
    private Collection $slidersDescription;

    #[ORM\OneToMany(mappedBy: 'sliders', targetEntity: SlidersImages::class, orphanRemoval: true)]
    private Collection $slidersImages;

    public function __construct()
    {
        $this->slidersDescription = new ArrayCollection();
        $this->slidersImages = new ArrayCollection();
    }

    public function getSlidersId(): ?int
    {
        return $this->slidersId;
    }

    public function getSlidersAlias(): ?string
    {
        return $this->slidersAlias;
    }

    public function setSlidersAlias(?string $slidersAlias): self
    {
        $this->slidersAlias = $slidersAlias;

        return $this;
    }

    public function getSlidersDelay(): ?int
    {
        return $this->slidersDelay;
    }

    public function setSlidersDelay(?int $slidersDelay): self
    {
        $this->slidersDelay = $slidersDelay;

        return $this;
    }

    public function getSlidersNavTop(): ?int
    {
        return $this->slidersNavTop;
    }

    public function setSlidersNavTop(?int $slidersNavTop): self
    {
        $this->slidersNavTop = $slidersNavTop;

        return $this;
    }

    public function getSlidersNavLeft(): ?int
    {
        return $this->slidersNavLeft;
    }

    public function setSlidersNavLeft(?int $slidersNavLeft): self
    {
        $this->slidersNavLeft = $slidersNavLeft;

        return $this;
    }

    public function getThumbnav(): ?int
    {
        return $this->thumbnav;
    }

    public function setThumbnav(?int $thumbnav): self
    {
        $this->thumbnav = $thumbnav;

        return $this;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getLastModified(): ?\DateTimeInterface
    {
        return $this->lastModified;
    }

    public function setLastModified(?\DateTimeInterface $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * @return Collection<int, SlidersDescription>
     */
    public function getSlidersDescription(): Collection
    {
        return $this->slidersDescription;
    }

    public function addSlidersDescription(SlidersDescription $slidersDescription): self
    {
        if (!$this->slidersDescription->contains($slidersDescription)) {
            $this->slidersDescription->add($slidersDescription);
            $slidersDescription->setSliders($this);
        }

        return $this;
    }

    public function removeSlidersDescription(SlidersDescription $slidersDescription): self
    {
        if ($this->slidersDescription->removeElement($slidersDescription)) {
            // set the owning side to null (unless already changed)
            if ($slidersDescription->getSliders() === $this) {
                $slidersDescription->setSliders(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SlidersImages>
     */
    public function getSlidersImages(): Collection
    {
        return $this->slidersImages;
    }

    public function addSlidersImage(SlidersImages $slidersImage): self
    {
        if (!$this->slidersImages->contains($slidersImage)) {
            $this->slidersImages->add($slidersImage);
            $slidersImage->setSliders($this);
        }

        return $this;
    }

    public function removeSlidersImage(SlidersImages $slidersImage): self
    {
        if ($this->slidersImages->removeElement($slidersImage)) {
            // set the owning side to null (unless already changed)
            if ($slidersImage->getSliders() === $this) {
                $slidersImage->setSliders(null);
            }
        }

        return $this;
    }


}
