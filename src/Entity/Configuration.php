<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 */
#[ORM\Table(name: 'configuration')]
#[ORM\Entity(repositoryClass: 'App\Repository\ConfigurationRepository')]
class Configuration
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'configuration_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $configurationId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'configuration_title', type: 'string', length: 64, nullable: false)]
    private $configurationTitle;

    /**
     * @var string
     */
    #[ORM\Column(name: 'configuration_key', type: 'string', length: 64, nullable: false)]
    private $configurationKey;

    /**
     * @var string
     */
    #[ORM\Column(name: 'configuration_value', type: 'text', length: 65535, nullable: false)]
    private $configurationValue;

    /**
     * @var string
     */
    #[ORM\Column(name: 'configuration_description', type: 'string', length: 255, nullable: false)]
    private $configurationDescription;

    /**
     * @var int
     */
    #[ORM\Column(name: 'configuration_group_id', type: 'integer', nullable: false)]
    private $configurationGroupId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'use_function', type: 'string', length: 255, nullable: true)]
    private $useFunction;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'set_function', type: 'string', length: 1020, nullable: true)]
    private $setFunction;

    public function getConfigurationId(): ?int
    {
        return $this->configurationId;
    }

    public function getConfigurationTitle(): ?string
    {
        return $this->configurationTitle;
    }

    public function setConfigurationTitle(string $configurationTitle): self
    {
        $this->configurationTitle = $configurationTitle;

        return $this;
    }

    public function getConfigurationKey(): ?string
    {
        return $this->configurationKey;
    }

    public function setConfigurationKey(string $configurationKey): self
    {
        $this->configurationKey = $configurationKey;

        return $this;
    }

    public function getConfigurationValue(): ?string
    {
        return $this->configurationValue;
    }

    public function setConfigurationValue(string $configurationValue): self
    {
        $this->configurationValue = $configurationValue;

        return $this;
    }

    public function getConfigurationDescription(): ?string
    {
        return $this->configurationDescription;
    }

    public function setConfigurationDescription(string $configurationDescription): self
    {
        $this->configurationDescription = $configurationDescription;

        return $this;
    }

    public function getConfigurationGroupId(): ?int
    {
        return $this->configurationGroupId;
    }

    public function setConfigurationGroupId(int $configurationGroupId): self
    {
        $this->configurationGroupId = $configurationGroupId;

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

    public function getLastModified(): ?\DateTimeInterface
    {
        return $this->lastModified;
    }

    public function setLastModified(?\DateTimeInterface $lastModified): self
    {
        $this->lastModified = $lastModified;

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

    public function getUseFunction(): ?string
    {
        return $this->useFunction;
    }

    public function setUseFunction(?string $useFunction): self
    {
        $this->useFunction = $useFunction;

        return $this;
    }

    public function getSetFunction(): ?string
    {
        return $this->setFunction;
    }

    public function setSetFunction(?string $setFunction): self
    {
        $this->setFunction = $setFunction;

        return $this;
    }


}
