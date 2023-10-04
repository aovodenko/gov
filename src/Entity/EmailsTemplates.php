<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsTemplates
 */
#[ORM\Table(name: 'emails_templates')]
#[ORM\Entity]
class EmailsTemplates
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'emails_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $emailsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'emails_cod', type: 'string', length: 50, nullable: false)]
    private $emailsCod = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'emails_description', type: 'text', length: 65535, nullable: true)]
    private $emailsDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'file', type: 'string', length: 50, nullable: true)]
    private $file;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'templates_name', type: 'string', length: 50, nullable: true)]
    private $templatesName;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true)]
    private $dateAdded;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;

    public function getEmailsId(): ?int
    {
        return $this->emailsId;
    }

    public function getEmailsCod(): ?string
    {
        return $this->emailsCod;
    }

    public function setEmailsCod(string $emailsCod): self
    {
        $this->emailsCod = $emailsCod;

        return $this;
    }

    public function getEmailsDescription(): ?string
    {
        return $this->emailsDescription;
    }

    public function setEmailsDescription(?string $emailsDescription): self
    {
        $this->emailsDescription = $emailsDescription;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getTemplatesName(): ?string
    {
        return $this->templatesName;
    }

    public function setTemplatesName(?string $templatesName): self
    {
        $this->templatesName = $templatesName;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getLastModified(): ?\DateTimeInterface
    {
        return $this->lastModified;
    }

    public function setLastModified(?\DateTimeInterface $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }


}
