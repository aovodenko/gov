<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigurationGroup
 */
#[ORM\Table(name: 'configuration_group')]
#[ORM\Entity]
class ConfigurationGroup
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'configuration_group_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $configurationGroupId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'configuration_group_title', type: 'string', length: 64, nullable: false)]
    private $configurationGroupTitle;

    /**
     * @var string
     */
    #[ORM\Column(name: 'configuration_group_description', type: 'string', length: 255, nullable: false)]
    private $configurationGroupDescription;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'visible', type: 'integer', nullable: true, options: ['default' => 1])]
    private $visible = 1;

    public function getConfigurationGroupId(): ?int
    {
        return $this->configurationGroupId;
    }

    public function getConfigurationGroupTitle(): ?string
    {
        return $this->configurationGroupTitle;
    }

    public function setConfigurationGroupTitle(string $configurationGroupTitle): self
    {
        $this->configurationGroupTitle = $configurationGroupTitle;

        return $this;
    }

    public function getConfigurationGroupDescription(): ?string
    {
        return $this->configurationGroupDescription;
    }

    public function setConfigurationGroupDescription(string $configurationGroupDescription): self
    {
        $this->configurationGroupDescription = $configurationGroupDescription;

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

    public function getVisible(): ?int
    {
        return $this->visible;
    }

    public function setVisible(?int $visible): self
    {
        $this->visible = $visible;

        return $this;
    }


}
