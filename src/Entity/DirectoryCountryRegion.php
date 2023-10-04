<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirectoryCountryRegion
 */
#[ORM\Table(name: 'directory_country_region')]
#[ORM\Index(name: 'DIRECTORY_COUNTRY_REGION_COUNTRY_ID', columns: ['country_id'])]
#[ORM\Entity]
class DirectoryCountryRegion
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'region_id', type: 'integer', nullable: false, options: ['unsigned' => true, 'comment' => 'Region Id'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $regionId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'country_id', type: 'string', length: 4, nullable: false, options: ['comment' => 'Country Id in ISO-2'])]
    private $countryId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'code', type: 'string', length: 32, nullable: true, options: ['comment' => 'Region code'])]
    private $code;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'default_name', type: 'string', length: 255, nullable: true, options: ['comment' => 'Region Name'])]
    private $defaultName;

    public function getRegionId(): ?int
    {
        return $this->regionId;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function setCountryId(string $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDefaultName(): ?string
    {
        return $this->defaultName;
    }

    public function setDefaultName(?string $defaultName): self
    {
        $this->defaultName = $defaultName;

        return $this;
    }


}
