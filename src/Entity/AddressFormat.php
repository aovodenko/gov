<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressFormat
 */
#[ORM\Table(name: 'address_format')]
#[ORM\Entity]
class AddressFormat
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'address_format_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $addressFormatId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'address_format', type: 'string', length: 128, nullable: false)]
    private $addressFormat;

    /**
     * @var string
     */
    #[ORM\Column(name: 'address_summary', type: 'string', length: 48, nullable: false)]
    private $addressSummary;

    public function getAddressFormatId(): ?int
    {
        return $this->addressFormatId;
    }

    public function getAddressFormat(): ?string
    {
        return $this->addressFormat;
    }

    public function setAddressFormat(string $addressFormat): self
    {
        $this->addressFormat = $addressFormat;

        return $this;
    }

    public function getAddressSummary(): ?string
    {
        return $this->addressSummary;
    }

    public function setAddressSummary(string $addressSummary): self
    {
        $this->addressSummary = $addressSummary;

        return $this;
    }


}
