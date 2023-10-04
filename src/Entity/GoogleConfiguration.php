<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoogleConfiguration
 */
#[ORM\Table(name: 'google_configuration')]
#[ORM\Entity]
class GoogleConfiguration
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'google_configuration_key', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $googleConfigurationKey;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'google_configuration_value', type: 'text', length: 65535, nullable: true)]
    private $googleConfigurationValue;

    public function getGoogleConfigurationKey(): ?string
    {
        return $this->googleConfigurationKey;
    }

    public function getGoogleConfigurationValue(): ?string
    {
        return $this->googleConfigurationValue;
    }

    public function setGoogleConfigurationValue(?string $googleConfigurationValue): self
    {
        $this->googleConfigurationValue = $googleConfigurationValue;

        return $this;
    }


}
