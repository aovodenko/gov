<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtsySections
 */
#[ORM\Table(name: 'etsy_sections')]
#[ORM\Entity]
class EtsySections
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'etsy_sections_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $etsySectionsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'etsy_sections_title', type: 'string', length: 255, nullable: false)]
    private $etsySectionsTitle;

    public function getEtsySectionsId(): ?int
    {
        return $this->etsySectionsId;
    }

    public function getEtsySectionsTitle(): ?string
    {
        return $this->etsySectionsTitle;
    }

    public function setEtsySectionsTitle(string $etsySectionsTitle): self
    {
        $this->etsySectionsTitle = $etsySectionsTitle;

        return $this;
    }


}
