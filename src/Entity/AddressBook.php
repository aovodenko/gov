<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressBook
 */
#[ORM\Table(name: 'address_book')]
#[ORM\Index(name: 'idx_address_book_customers_id', columns: ['customers_id'])]
#[ORM\Entity]
class AddressBook
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'address_book_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $addressBookId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    private $customersId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'entry_gender', type: 'string', length: 1, nullable: true, options: ['fixed' => true])]
    private $entryGender;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'entry_company', type: 'string', length: 32, nullable: true)]
    private $entryCompany;

    /**
     * @var string
     */
    #[ORM\Column(name: 'entry_firstname', type: 'string', length: 32, nullable: false)]
    private $entryFirstname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'entry_lastname', type: 'string', length: 32, nullable: false)]
    private $entryLastname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'entry_street_address', type: 'string', length: 64, nullable: false)]
    private $entryStreetAddress;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'entry_address_line_2', type: 'string', length: 64, nullable: true)]
    private $entryAddressLine2 = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'entry_suburb', type: 'string', length: 32, nullable: true)]
    private $entrySuburb;

    /**
     * @var string
     */
    #[ORM\Column(name: 'entry_postcode', type: 'string', length: 10, nullable: false)]
    private $entryPostcode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'entry_city', type: 'string', length: 32, nullable: false)]
    private $entryCity;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'entry_state', type: 'string', length: 32, nullable: true)]
    private $entryState;

    /**
     * @var int
     */
    #[ORM\Column(name: 'entry_country_id', type: 'integer', nullable: false)]
    private $entryCountryId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'entry_zone_id', type: 'integer', nullable: false)]
    private $entryZoneId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'entry_phone', type: 'string', length: 255, nullable: true)]
    private $entryPhone;

    public function getAddressBookId(): ?int
    {
        return $this->addressBookId;
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function setCustomersId(int $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
    }

    public function getEntryGender(): ?string
    {
        return $this->entryGender;
    }

    public function setEntryGender(?string $entryGender): self
    {
        $this->entryGender = $entryGender;

        return $this;
    }

    public function getEntryCompany(): ?string
    {
        return $this->entryCompany;
    }

    public function setEntryCompany(?string $entryCompany): self
    {
        $this->entryCompany = $entryCompany;

        return $this;
    }

    public function getEntryFirstname(): ?string
    {
        return $this->entryFirstname;
    }

    public function setEntryFirstname(string $entryFirstname): self
    {
        $this->entryFirstname = $entryFirstname;

        return $this;
    }

    public function getEntryLastname(): ?string
    {
        return $this->entryLastname;
    }

    public function setEntryLastname(string $entryLastname): self
    {
        $this->entryLastname = $entryLastname;

        return $this;
    }

    public function getEntryStreetAddress(): ?string
    {
        return $this->entryStreetAddress;
    }

    public function setEntryStreetAddress(string $entryStreetAddress): self
    {
        $this->entryStreetAddress = $entryStreetAddress;

        return $this;
    }

    public function getEntryAddressLine2(): ?string
    {
        return $this->entryAddressLine2;
    }

    public function setEntryAddressLine2(?string $entryAddressLine2): self
    {
        $this->entryAddressLine2 = $entryAddressLine2;

        return $this;
    }

    public function getEntrySuburb(): ?string
    {
        return $this->entrySuburb;
    }

    public function setEntrySuburb(?string $entrySuburb): self
    {
        $this->entrySuburb = $entrySuburb;

        return $this;
    }

    public function getEntryPostcode(): ?string
    {
        return $this->entryPostcode;
    }

    public function setEntryPostcode(string $entryPostcode): self
    {
        $this->entryPostcode = $entryPostcode;

        return $this;
    }

    public function getEntryCity(): ?string
    {
        return $this->entryCity;
    }

    public function setEntryCity(string $entryCity): self
    {
        $this->entryCity = $entryCity;

        return $this;
    }

    public function getEntryState(): ?string
    {
        return $this->entryState;
    }

    public function setEntryState(?string $entryState): self
    {
        $this->entryState = $entryState;

        return $this;
    }

    public function getEntryCountryId(): ?int
    {
        return $this->entryCountryId;
    }

    public function setEntryCountryId(int $entryCountryId): self
    {
        $this->entryCountryId = $entryCountryId;

        return $this;
    }

    public function getEntryZoneId(): ?int
    {
        return $this->entryZoneId;
    }

    public function setEntryZoneId(int $entryZoneId): self
    {
        $this->entryZoneId = $entryZoneId;

        return $this;
    }

    public function getEntryPhone(): ?string
    {
        return $this->entryPhone;
    }

    public function setEntryPhone(?string $entryPhone): self
    {
        $this->entryPhone = $entryPhone;

        return $this;
    }


}
