<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirectoryCountry
 */
#[ORM\Table(name: 'directory_country')]
#[ORM\Entity]
class DirectoryCountry
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'country_id', type: 'string', length: 2, nullable: false, options: ['comment' => 'Country Id in ISO-2'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $countryId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'iso2_code', type: 'string', length: 2, nullable: true, options: ['comment' => 'Country ISO-2 format'])]
    private $iso2Code;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'iso3_code', type: 'string', length: 3, nullable: true, options: ['comment' => 'Country ISO-3'])]
    private $iso3Code;

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function getIso2Code(): ?string
    {
        return $this->iso2Code;
    }

    public function setIso2Code(?string $iso2Code): self
    {
        $this->iso2Code = $iso2Code;

        return $this;
    }

    public function getIso3Code(): ?string
    {
        return $this->iso3Code;
    }

    public function setIso3Code(?string $iso3Code): self
    {
        $this->iso3Code = $iso3Code;

        return $this;
    }


}
