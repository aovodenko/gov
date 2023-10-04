<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HeadertagsCache
 */
#[ORM\Table(name: 'headertags_cache')]
#[ORM\Entity]
class HeadertagsCache
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'text', length: 65535, nullable: true)]
    private $title;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'data', type: 'text', length: 65535, nullable: true)]
    private $data;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
