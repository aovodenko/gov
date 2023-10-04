<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminGroups
 */
#[ORM\Table(name: 'admin_groups')]
#[ORM\UniqueConstraint(name: 'admin_groups_name', columns: ['admin_groups_name'])]
#[ORM\Entity]
class AdminGroups
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'admin_groups_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $adminGroupsId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'admin_groups_name', type: 'string', length: 64, nullable: true)]
    private $adminGroupsName;

    public function getAdminGroupsId(): ?int
    {
        return $this->adminGroupsId;
    }

    public function getAdminGroupsName(): ?string
    {
        return $this->adminGroupsName;
    }

    public function setAdminGroupsName(?string $adminGroupsName): self
    {
        $this->adminGroupsName = $adminGroupsName;

        return $this;
    }


}
