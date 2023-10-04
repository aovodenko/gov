<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContribTracker
 */
#[ORM\Table(name: 'contrib_tracker')]
#[ORM\Entity]
class ContribTracker
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'contr_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $contrId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'contrib_osc_id', type: 'integer', nullable: false)]
    private $contribOscId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'contrib_name', type: 'string', length: 255, nullable: false)]
    private $contribName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'contrib_link', type: 'string', length: 255, nullable: true)]
    private $contribLink;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'config_comments', type: 'text', length: 0, nullable: true)]
    private $configComments;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'status', type: 'boolean', nullable: false, options: ['default' => 2])]
    private $status = '2';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'note_created', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $noteCreated = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'contr_last_modified', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $contrLastModified = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'last_update', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $lastUpdate = '0000-00-00 00:00:00';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'contrib_vers', type: 'string', length: 7, nullable: true)]
    private $contribVers;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'contrib_support', type: 'string', length: 55, nullable: true)]
    private $contribSupport;

    public function getContrId(): ?int
    {
        return $this->contrId;
    }

    public function getContribOscId(): ?int
    {
        return $this->contribOscId;
    }

    public function setContribOscId(int $contribOscId): self
    {
        $this->contribOscId = $contribOscId;

        return $this;
    }

    public function getContribName(): ?string
    {
        return $this->contribName;
    }

    public function setContribName(string $contribName): self
    {
        $this->contribName = $contribName;

        return $this;
    }

    public function getContribLink(): ?string
    {
        return $this->contribLink;
    }

    public function setContribLink(?string $contribLink): self
    {
        $this->contribLink = $contribLink;

        return $this;
    }

    public function getConfigComments(): ?string
    {
        return $this->configComments;
    }

    public function setConfigComments(?string $configComments): self
    {
        $this->configComments = $configComments;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getNoteCreated(): ?\DateTimeInterface
    {
        return $this->noteCreated;
    }

    public function setNoteCreated(\DateTimeInterface $noteCreated): self
    {
        $this->noteCreated = $noteCreated;

        return $this;
    }

    public function getContrLastModified(): ?\DateTimeInterface
    {
        return $this->contrLastModified;
    }

    public function setContrLastModified(\DateTimeInterface $contrLastModified): self
    {
        $this->contrLastModified = $contrLastModified;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(\DateTimeInterface $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getContribVers(): ?string
    {
        return $this->contribVers;
    }

    public function setContribVers(?string $contribVers): self
    {
        $this->contribVers = $contribVers;

        return $this;
    }

    public function getContribSupport(): ?string
    {
        return $this->contribSupport;
    }

    public function setContribSupport(?string $contribSupport): self
    {
        $this->contribSupport = $contribSupport;

        return $this;
    }


}
