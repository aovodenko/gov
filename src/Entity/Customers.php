<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Customers
 */
#[ORM\Table(name: 'customers')]
#[ORM\Entity(repositoryClass: 'App\Repository\CustomersRepository')]
class Customers
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_gender', type: 'string', length: 1, nullable: true, options: ['fixed' => true])]
    private $customersGender;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_firstname', type: 'string', length: 32, nullable: true)]
    private $customersFirstname = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_lastname', type: 'string', length: 32, nullable: true)]
    private $customersLastname = '';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'customers_dob', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $customersDob = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_email_address', type: 'string', length: 96, nullable: false)]
    private $customersEmailAddress;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_email_validation', type: 'string', length: 0, nullable: true, options: ['default' => 'Valid'])]
    private $customersEmailValidation = 'Valid';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'customers_email_validation_date', type: 'datetime', nullable: true)]
    private $customersEmailValidationDate;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_default_address_id', type: 'integer', nullable: false)]
    private $customersDefaultAddressId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_telephone', type: 'string', length: 32, nullable: true)]
    private $customersTelephone = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_fax', type: 'string', length: 32, nullable: true)]
    private $customersFax;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_password', type: 'string', length: 40, nullable: true)]
    private $customersPassword;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'customers_newsletter', type: 'boolean', nullable: true)]
    private $customersNewsletter;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'guest_account', type: 'boolean', nullable: false)]
    private $guestAccount = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_shopping_points', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $customersShoppingPoints = '0.0000';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'customers_points_expires', type: 'date', nullable: true)]
    private $customersPointsExpires;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_paypal_payerid', type: 'string', length: 20, nullable: true)]
    private $customersPaypalPayerid;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'customers_paypal_ec', type: 'boolean', nullable: false)]
    private $customersPaypalEc = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'customers_banned', type: 'boolean', nullable: true)]
    private $customersBanned = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_notes', type: 'string', length: 1024, nullable: true)]
    private $customersNotes;

    #[ORM\OneToMany(targetEntity: 'App\Entity\CustomersBasket', mappedBy: 'customers')]
    private $customersBasket;

    public function __construct()
    {
        $this->customersBasket = new ArrayCollection();
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function getCustomersGender(): ?string
    {
        return $this->customersGender;
    }

    public function setCustomersGender(?string $customersGender): self
    {
        $this->customersGender = $customersGender;

        return $this;
    }

    public function getCustomersFirstname(): ?string
    {
        return $this->customersFirstname;
    }

    public function setCustomersFirstname(?string $customersFirstname): self
    {
        $this->customersFirstname = $customersFirstname;

        return $this;
    }

    public function getCustomersLastname(): ?string
    {
        return $this->customersLastname;
    }

    public function setCustomersLastname(?string $customersLastname): self
    {
        $this->customersLastname = $customersLastname;

        return $this;
    }

    public function getCustomersDob(): ?\DateTimeInterface
    {
        return $this->customersDob;
    }

    public function setCustomersDob(\DateTimeInterface $customersDob): self
    {
        $this->customersDob = $customersDob;

        return $this;
    }

    public function getCustomersEmailAddress(): ?string
    {
        return $this->customersEmailAddress;
    }

    public function setCustomersEmailAddress(string $customersEmailAddress): self
    {
        $this->customersEmailAddress = $customersEmailAddress;

        return $this;
    }

    public function getCustomersEmailValidation(): ?string
    {
        return $this->customersEmailValidation;
    }

    public function setCustomersEmailValidation(?string $customersEmailValidation): self
    {
        $this->customersEmailValidation = $customersEmailValidation;

        return $this;
    }

    public function getCustomersEmailValidationDate(): ?\DateTimeInterface
    {
        return $this->customersEmailValidationDate;
    }

    public function setCustomersEmailValidationDate(?\DateTimeInterface $customersEmailValidationDate): self
    {
        $this->customersEmailValidationDate = $customersEmailValidationDate;

        return $this;
    }

    public function getCustomersDefaultAddressId(): ?int
    {
        return $this->customersDefaultAddressId;
    }

    public function setCustomersDefaultAddressId(int $customersDefaultAddressId): self
    {
        $this->customersDefaultAddressId = $customersDefaultAddressId;

        return $this;
    }

    public function getCustomersTelephone(): ?string
    {
        return $this->customersTelephone;
    }

    public function setCustomersTelephone(?string $customersTelephone): self
    {
        $this->customersTelephone = $customersTelephone;

        return $this;
    }

    public function getCustomersFax(): ?string
    {
        return $this->customersFax;
    }

    public function setCustomersFax(?string $customersFax): self
    {
        $this->customersFax = $customersFax;

        return $this;
    }

    public function getCustomersPassword(): ?string
    {
        return $this->customersPassword;
    }

    public function setCustomersPassword(?string $customersPassword): self
    {
        $this->customersPassword = $customersPassword;

        return $this;
    }

    public function getCustomersNewsletter(): ?bool
    {
        return $this->customersNewsletter;
    }

    public function setCustomersNewsletter(?bool $customersNewsletter): self
    {
        $this->customersNewsletter = $customersNewsletter;

        return $this;
    }

    public function getGuestAccount(): ?bool
    {
        return $this->guestAccount;
    }

    public function setGuestAccount(bool $guestAccount): self
    {
        $this->guestAccount = $guestAccount;

        return $this;
    }

    public function getCustomersShoppingPoints(): ?string
    {
        return $this->customersShoppingPoints;
    }

    public function setCustomersShoppingPoints(string $customersShoppingPoints): self
    {
        $this->customersShoppingPoints = $customersShoppingPoints;

        return $this;
    }

    public function getCustomersPointsExpires(): ?\DateTimeInterface
    {
        return $this->customersPointsExpires;
    }

    public function setCustomersPointsExpires(?\DateTimeInterface $customersPointsExpires): self
    {
        $this->customersPointsExpires = $customersPointsExpires;

        return $this;
    }

    public function getCustomersPaypalPayerid(): ?string
    {
        return $this->customersPaypalPayerid;
    }

    public function setCustomersPaypalPayerid(?string $customersPaypalPayerid): self
    {
        $this->customersPaypalPayerid = $customersPaypalPayerid;

        return $this;
    }

    public function getCustomersPaypalEc(): ?bool
    {
        return $this->customersPaypalEc;
    }

    public function setCustomersPaypalEc(bool $customersPaypalEc): self
    {
        $this->customersPaypalEc = $customersPaypalEc;

        return $this;
    }

    public function getCustomersBanned(): ?bool
    {
        return $this->customersBanned;
    }

    public function setCustomersBanned(?bool $customersBanned): self
    {
        $this->customersBanned = $customersBanned;

        return $this;
    }

    public function getCustomersNotes(): ?string
    {
        return $this->customersNotes;
    }

    public function setCustomersNotes(?string $customersNotes): self
    {
        $this->customersNotes = $customersNotes;

        return $this;
    }

    public function getCustomersBasket(): Collection
    {
        return $this->customersBasket;
    }
}
