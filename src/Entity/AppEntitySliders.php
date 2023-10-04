<?php

namespace App\Entity;

use App\Repository\AppEntitySlidersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppEntitySlidersRepository::class)]
class AppEntitySliders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'appEntitySliders', targetEntity: SlidersDescription::class, orphanRemoval: true)]
    private Collection $sliders_desription;

    #[ORM\OneToMany(mappedBy: 'sliders', targetEntity: SlidersDescription::class, orphanRemoval: true)]
    private Collection $SlidersDescription;

    #[ORM\OneToMany(mappedBy: 'sliders1', targetEntity: SlidersDescription::class)]
    private Collection $slidersDescription;

    public function __construct()
    {
        $this->sliders_desription = new ArrayCollection();
        $this->SlidersDescription = new ArrayCollection();
        $this->slidersDescription = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, SlidersDescription>
     */
    public function getSlidersDesription(): Collection
    {
        return $this->sliders_desription;
    }

    public function addSlidersDesription(SlidersDescription $slidersDesription): self
    {
        if (!$this->sliders_desription->contains($slidersDesription)) {
            $this->sliders_desription->add($slidersDesription);
            $slidersDesription->setAppEntitySliders($this);
        }

        return $this;
    }

    public function removeSlidersDesription(SlidersDescription $slidersDesription): self
    {
        if ($this->sliders_desription->removeElement($slidersDesription)) {
            // set the owning side to null (unless already changed)
            if ($slidersDesription->getAppEntitySliders() === $this) {
                $slidersDesription->setAppEntitySliders(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SlidersDescription>
     */
    public function getSlidersDescription(): Collection
    {
        return $this->SlidersDescription;
    }

    public function addSlidersDescription(SlidersDescription $slidersDescription): self
    {
        if (!$this->SlidersDescription->contains($slidersDescription)) {
            $this->SlidersDescription->add($slidersDescription);
            $slidersDescription->setSliders($this);
        }

        return $this;
    }

    public function removeSlidersDescription(SlidersDescription $slidersDescription): self
    {
        if ($this->SlidersDescription->removeElement($slidersDescription)) {
            // set the owning side to null (unless already changed)
            if ($slidersDescription->getSliders() === $this) {
                $slidersDescription->setSliders(null);
            }
        }

        return $this;
    }
}
