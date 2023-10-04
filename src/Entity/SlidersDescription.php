<?php

namespace App\Entity;

use App\Entity\Sliders;
use Doctrine\ORM\Mapping as ORM;

/**
 * SlidersDescription
 */
#[ORM\Table(name: 'sliders_description')]
#[ORM\Entity]
class SlidersDescription
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'sliders_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $slidersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sliders_name', type: 'string', length: 512, nullable: true)]
    private $slidersName;

    #[ORM\ManyToOne(inversedBy: 'slidersDescription')]
    #[ORM\JoinColumn(name: 'sliders_id', referencedColumnName: 'sliders_id', nullable: false)]
    private ?Sliders $sliders = null;

    public function getSlidersId(): ?int
    {
        return $this->slidersId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getSlidersName(): ?string
    {
        return $this->slidersName;
    }

    public function setSlidersName(?string $slidersName): self
    {
        $this->slidersName = $slidersName;

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

}
