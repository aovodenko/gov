<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 */
#[ORM\Table(name: 'admin')]
#[ORM\UniqueConstraint(name: 'admin_email_address', columns: ['admin_email_address'])]
#[ORM\Entity]
class Admin
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'admin_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $adminId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'admin_groups_id', type: 'integer', nullable: true)]
    private $adminGroupsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'admin_firstname', type: 'string', length: 32, nullable: false)]
    private $adminFirstname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'admin_lastname', type: 'string', length: 32, nullable: true)]
    private $adminLastname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'admin_email_address', type: 'string', length: 96, nullable: false)]
    private $adminEmailAddress;

    /**
     * @var string
     */
    #[ORM\Column(name: 'admin_password', type: 'string', length: 40, nullable: false)]
    private $adminPassword;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'admin_created', type: 'datetime', nullable: true)]
    private $adminCreated;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'admin_modified', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $adminModified = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'admin_logdate', type: 'datetime', nullable: true)]
    private $adminLogdate;

    /**
     * @var int
     */
    #[ORM\Column(name: 'admin_lognum', type: 'integer', nullable: false)]
    private $adminLognum = '0';

    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    public function getAdminGroupsId(): ?int
    {
        return $this->adminGroupsId;
    }

    public function setAdminGroupsId(?int $adminGroupsId): self
    {
        $this->adminGroupsId = $adminGroupsId;

        return $this;
    }

    public function getAdminFirstname(): ?string
    {
        return $this->adminFirstname;
    }

    public function setAdminFirstname(string $adminFirstname): self
    {
        $this->adminFirstname = $adminFirstname;

        return $this;
    }

    public function getAdminLastname(): ?string
    {
        return $this->adminLastname;
    }

    public function setAdminLastname(?string $adminLastname): self
    {
        $this->adminLastname = $adminLastname;

        return $this;
    }

    public function getAdminEmailAddress(): ?string
    {
        return $this->adminEmailAddress;
    }

    public function setAdminEmailAddress(string $adminEmailAddress): self
    {
        $this->adminEmailAddress = $adminEmailAddress;

        return $this;
    }

    public function getAdminPassword(): ?string
    {
        return $this->adminPassword;
    }

    public function setAdminPassword(string $adminPassword): self
    {
        $this->adminPassword = $adminPassword;

        return $this;
    }

    public function getAdminCreated(): ?\DateTimeInterface
    {
        return $this->adminCreated;
    }

    public function setAdminCreated(?\DateTimeInterface $adminCreated): self
    {
        $this->adminCreated = $adminCreated;

        return $this;
    }

    public function getAdminModified(): ?\DateTimeInterface
    {
        return $this->adminModified;
    }

    public function setAdminModified(\DateTimeInterface $adminModified): self
    {
        $this->adminModified = $adminModified;

        return $this;
    }

    public function getAdminLogdate(): ?\DateTimeInterface
    {
        return $this->adminLogdate;
    }

    public function setAdminLogdate(?\DateTimeInterface $adminLogdate): self
    {
        $this->adminLogdate = $adminLogdate;

        return $this;
    }

    public function getAdminLognum(): ?int
    {
        return $this->adminLognum;
    }

    public function setAdminLognum(int $adminLognum): self
    {
        $this->adminLognum = $adminLognum;

        return $this;
    }


}
