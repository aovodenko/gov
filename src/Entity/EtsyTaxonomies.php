<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtsyTaxonomies
 */
#[ORM\Table(name: 'etsy_taxonomies')]
#[ORM\Entity]
class EtsyTaxonomies
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'etsy_taxonomies_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $etsyTaxonomiesId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'etsy_taxonomies_parent_id', type: 'integer', nullable: true)]
    private $etsyTaxonomiesParentId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'etsy_taxonomies_title', type: 'string', length: 256, nullable: true)]
    private $etsyTaxonomiesTitle;

    public function getEtsyTaxonomiesId(): ?int
    {
        return $this->etsyTaxonomiesId;
    }

    public function getEtsyTaxonomiesParentId(): ?int
    {
        return $this->etsyTaxonomiesParentId;
    }

    public function setEtsyTaxonomiesParentId(?int $etsyTaxonomiesParentId): self
    {
        $this->etsyTaxonomiesParentId = $etsyTaxonomiesParentId;

        return $this;
    }

    public function getEtsyTaxonomiesTitle(): ?string
    {
        return $this->etsyTaxonomiesTitle;
    }

    public function setEtsyTaxonomiesTitle(?string $etsyTaxonomiesTitle): self
    {
        $this->etsyTaxonomiesTitle = $etsyTaxonomiesTitle;

        return $this;
    }


}
