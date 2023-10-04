<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletters
 */
#[ORM\Table(name: 'newsletters')]
#[ORM\Entity]
class Newsletters
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'newsletters_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $newslettersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'title', type: 'string', length: 255, nullable: false)]
    private $title;

    /**
     * @var string
     */
    #[ORM\Column(name: 'content', type: 'text', length: 65535, nullable: false)]
    private $content;

    /**
     * @var string
     */
    #[ORM\Column(name: 'module', type: 'string', length: 255, nullable: false)]
    private $module;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_sent', type: 'datetime', nullable: true)]
    private $dateSent;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'status', type: 'integer', nullable: true)]
    private $status;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'locked', type: 'integer', nullable: true)]
    private $locked = '0';

    public function getNewslettersId(): ?int
    {
        return $this->newslettersId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getDateSent(): ?\DateTimeInterface
    {
        return $this->dateSent;
    }

    public function setDateSent(?\DateTimeInterface $dateSent): self
    {
        $this->dateSent = $dateSent;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLocked(): ?int
    {
        return $this->locked;
    }

    public function setLocked(?int $locked): self
    {
        $this->locked = $locked;

        return $this;
    }


}
