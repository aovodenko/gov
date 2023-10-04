<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SitemapExclude
 */
#[ORM\Table(name: 'sitemap_exclude')]
#[ORM\Entity]
class SitemapExclude
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'exclude_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $excludeId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'exclude_file', type: 'string', length: 255, nullable: false)]
    private $excludeFile;

    /**
     * @var int
     */
    #[ORM\Column(name: 'exclude_type', type: 'integer', nullable: false)]
    private $excludeType = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'is_box', type: 'integer', nullable: false)]
    private $isBox = '0';

    public function getExcludeId(): ?int
    {
        return $this->excludeId;
    }

    public function getExcludeFile(): ?string
    {
        return $this->excludeFile;
    }

    public function setExcludeFile(string $excludeFile): self
    {
        $this->excludeFile = $excludeFile;

        return $this;
    }

    public function getExcludeType(): ?int
    {
        return $this->excludeType;
    }

    public function setExcludeType(int $excludeType): self
    {
        $this->excludeType = $excludeType;

        return $this;
    }

    public function getIsBox(): ?int
    {
        return $this->isBox;
    }

    public function setIsBox(int $isBox): self
    {
        $this->isBox = $isBox;

        return $this;
    }


}
