<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminFiles
 */
#[ORM\Table(name: 'admin_files')]
#[ORM\Entity]
class AdminFiles
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'admin_files_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $adminFilesId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'admin_files_name', type: 'string', length: 64, nullable: false)]
    private $adminFilesName;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'admin_files_is_boxes', type: 'boolean', nullable: false)]
    private $adminFilesIsBoxes = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'admin_files_to_boxes', type: 'integer', nullable: false)]
    private $adminFilesToBoxes = '0';

    /**
     * @var array
     */
    #[ORM\Column(name: 'admin_groups_id', type: 'simple_array', length: 0, nullable: false, options: ['default' => 1])]
    private $adminGroupsId = '1';

    public function getAdminFilesId(): ?int
    {
        return $this->adminFilesId;
    }

    public function getAdminFilesName(): ?string
    {
        return $this->adminFilesName;
    }

    public function setAdminFilesName(string $adminFilesName): self
    {
        $this->adminFilesName = $adminFilesName;

        return $this;
    }

    public function getAdminFilesIsBoxes(): ?bool
    {
        return $this->adminFilesIsBoxes;
    }

    public function setAdminFilesIsBoxes(bool $adminFilesIsBoxes): self
    {
        $this->adminFilesIsBoxes = $adminFilesIsBoxes;

        return $this;
    }

    public function getAdminFilesToBoxes(): ?int
    {
        return $this->adminFilesToBoxes;
    }

    public function setAdminFilesToBoxes(int $adminFilesToBoxes): self
    {
        $this->adminFilesToBoxes = $adminFilesToBoxes;

        return $this;
    }

    public function getAdminGroupsId(): ?array
    {
        return $this->adminGroupsId;
    }

    public function setAdminGroupsId(array $adminGroupsId): self
    {
        $this->adminGroupsId = $adminGroupsId;

        return $this;
    }


}
