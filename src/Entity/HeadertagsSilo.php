<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeadertagsSilo
 */
#[ORM\Table(name: 'headertags_silo')]
#[ORM\Entity]
class HeadertagsSilo
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'category_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $categoryId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false, options: ['default' => 1])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = 1;

    /**
     * @var string
     */
    #[ORM\Column(name: 'box_heading', type: 'string', length: 60, nullable: false)]
    private $boxHeading;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'is_disabled', type: 'boolean', nullable: false)]
    private $isDisabled = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'max_links', type: 'integer', nullable: false, options: ['default' => 6])]
    private $maxLinks = 6;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'sorton', type: 'boolean', nullable: false)]
    private $sorton = '0';

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getBoxHeading(): ?string
    {
        return $this->boxHeading;
    }

    public function setBoxHeading(string $boxHeading): self
    {
        $this->boxHeading = $boxHeading;

        return $this;
    }

    public function getIsDisabled(): ?bool
    {
        return $this->isDisabled;
    }

    public function setIsDisabled(bool $isDisabled): self
    {
        $this->isDisabled = $isDisabled;

        return $this;
    }

    public function getMaxLinks(): ?int
    {
        return $this->maxLinks;
    }

    public function setMaxLinks(int $maxLinks): self
    {
        $this->maxLinks = $maxLinks;

        return $this;
    }

    public function getSorton(): ?bool
    {
        return $this->sorton;
    }

    public function setSorton(bool $sorton): self
    {
        $this->sorton = $sorton;

        return $this;
    }


}
