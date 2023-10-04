<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 */
#[ORM\Table(name: 'languages')]
#[ORM\Index(name: 'IDX_LANGUAGES_NAME', columns: ['name'])]
#[ORM\Entity]
class Languages
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'languages_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $languagesId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'name', type: 'string', length: 32, nullable: false)]
    private $name;

    /**
     * @var string
     */
    #[ORM\Column(name: 'code', type: 'string', length: 2, nullable: false, options: ['fixed' => true])]
    private $code;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'image', type: 'string', length: 64, nullable: true)]
    private $image;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'directory', type: 'string', length: 32, nullable: true)]
    private $directory;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder;

    public function getLanguagesId(): ?int
    {
        return $this->languagesId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDirectory(): ?string
    {
        return $this->directory;
    }

    public function setDirectory(?string $directory): self
    {
        $this->directory = $directory;

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


}
