<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerEntity
 */
#[ORM\Table(name: 'customer_entity')]
#[ORM\Index(name: 'CUSTOMER_ENTITY_STORE_ID', columns: ['store_id'])]
#[ORM\Index(name: 'CUSTOMER_ENTITY_WEBSITE_ID', columns: ['website_id'])]
#[ORM\Index(name: 'CUSTOMER_ENTITY_FIRSTNAME', columns: ['firstname'])]
#[ORM\Index(name: 'CUSTOMER_ENTITY_LASTNAME', columns: ['lastname'])]
#[ORM\UniqueConstraint(name: 'CUSTOMER_ENTITY_EMAIL_WEBSITE_ID', columns: ['email', 'website_id'])]
#[ORM\Entity]
class CustomerEntity
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'entity_id', type: 'integer', nullable: false, options: ['unsigned' => true, 'comment' => 'Entity Id'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $entityId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'website_id', type: 'smallint', nullable: true, options: ['unsigned' => true, 'comment' => 'Website Id'])]
    private $websiteId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'email', type: 'string', length: 255, nullable: true, options: ['comment' => 'Email'])]
    private $email;

    /**
     * @var int
     */
    #[ORM\Column(name: 'group_id', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Group Id'])]
    private $groupId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'increment_id', type: 'string', length: 50, nullable: true, options: ['comment' => 'Increment Id'])]
    private $incrementId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'store_id', type: 'smallint', nullable: true, options: ['unsigned' => true, 'comment' => 'Store Id'])]
    private $storeId = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP', 'comment' => 'Created At'])]
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP', 'comment' => 'Updated At'])]
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     */
    #[ORM\Column(name: 'is_active', type: 'smallint', nullable: false, options: ['default' => 1, 'unsigned' => true, 'comment' => 'Is Active'])]
    private $isActive = '1';

    /**
     * @var int
     */
    #[ORM\Column(name: 'disable_auto_group_change', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Disable automatic group change based on VAT ID'])]
    private $disableAutoGroupChange = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'created_in', type: 'string', length: 255, nullable: true, options: ['comment' => 'Created From'])]
    private $createdIn;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'prefix', type: 'string', length: 40, nullable: true, options: ['comment' => 'Name Prefix'])]
    private $prefix;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'firstname', type: 'string', length: 255, nullable: true, options: ['comment' => 'First Name'])]
    private $firstname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'middlename', type: 'string', length: 255, nullable: true, options: ['comment' => 'Middle Name/Initial'])]
    private $middlename;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'lastname', type: 'string', length: 255, nullable: true, options: ['comment' => 'Last Name'])]
    private $lastname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'suffix', type: 'string', length: 40, nullable: true, options: ['comment' => 'Name Suffix'])]
    private $suffix;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'dob', type: 'date', nullable: true, options: ['comment' => 'Date of Birth'])]
    private $dob;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'password_hash', type: 'string', length: 128, nullable: true, options: ['comment' => 'Password_hash'])]
    private $passwordHash;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'rp_token', type: 'string', length: 128, nullable: true, options: ['comment' => 'Reset password token'])]
    private $rpToken;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'rp_token_created_at', type: 'datetime', nullable: true, options: ['comment' => 'Reset password token creation time'])]
    private $rpTokenCreatedAt;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'default_billing', type: 'integer', nullable: true, options: ['unsigned' => true, 'comment' => 'Default Billing Address'])]
    private $defaultBilling;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'default_shipping', type: 'integer', nullable: true, options: ['unsigned' => true, 'comment' => 'Default Shipping Address'])]
    private $defaultShipping;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'taxvat', type: 'string', length: 50, nullable: true, options: ['comment' => 'Tax/VAT Number'])]
    private $taxvat;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'confirmation', type: 'string', length: 64, nullable: true, options: ['comment' => 'Is Confirmed'])]
    private $confirmation;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'gender', type: 'smallint', nullable: true, options: ['unsigned' => true, 'comment' => 'Gender'])]
    private $gender;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'failures_num', type: 'smallint', nullable: true, options: ['comment' => 'Failure Number'])]
    private $failuresNum = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'first_failure', type: 'datetime', nullable: true, options: ['comment' => 'First Failure'])]
    private $firstFailure;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'lock_expires', type: 'datetime', nullable: true, options: ['comment' => 'Lock Expiration Date'])]
    private $lockExpires;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }

    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    public function getIncrementId(): ?string
    {
        return $this->incrementId;
    }

    public function setIncrementId(?string $incrementId): self
    {
        $this->incrementId = $incrementId;

        return $this;
    }

    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getDisableAutoGroupChange(): ?int
    {
        return $this->disableAutoGroupChange;
    }

    public function setDisableAutoGroupChange(int $disableAutoGroupChange): self
    {
        $this->disableAutoGroupChange = $disableAutoGroupChange;

        return $this;
    }

    public function getCreatedIn(): ?string
    {
        return $this->createdIn;
    }

    public function setCreatedIn(?string $createdIn): self
    {
        $this->createdIn = $createdIn;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    public function setDob(?\DateTimeInterface $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->passwordHash;
    }

    public function setPasswordHash(?string $passwordHash): self
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    public function getRpToken(): ?string
    {
        return $this->rpToken;
    }

    public function setRpToken(?string $rpToken): self
    {
        $this->rpToken = $rpToken;

        return $this;
    }

    public function getRpTokenCreatedAt(): ?\DateTimeInterface
    {
        return $this->rpTokenCreatedAt;
    }

    public function setRpTokenCreatedAt(?\DateTimeInterface $rpTokenCreatedAt): self
    {
        $this->rpTokenCreatedAt = $rpTokenCreatedAt;

        return $this;
    }

    public function getDefaultBilling(): ?int
    {
        return $this->defaultBilling;
    }

    public function setDefaultBilling(?int $defaultBilling): self
    {
        $this->defaultBilling = $defaultBilling;

        return $this;
    }

    public function getDefaultShipping(): ?int
    {
        return $this->defaultShipping;
    }

    public function setDefaultShipping(?int $defaultShipping): self
    {
        $this->defaultShipping = $defaultShipping;

        return $this;
    }

    public function getTaxvat(): ?string
    {
        return $this->taxvat;
    }

    public function setTaxvat(?string $taxvat): self
    {
        $this->taxvat = $taxvat;

        return $this;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(?string $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFailuresNum(): ?int
    {
        return $this->failuresNum;
    }

    public function setFailuresNum(?int $failuresNum): self
    {
        $this->failuresNum = $failuresNum;

        return $this;
    }

    public function getFirstFailure(): ?\DateTimeInterface
    {
        return $this->firstFailure;
    }

    public function setFirstFailure(?\DateTimeInterface $firstFailure): self
    {
        $this->firstFailure = $firstFailure;

        return $this;
    }

    public function getLockExpires(): ?\DateTimeInterface
    {
        return $this->lockExpires;
    }

    public function setLockExpires(?\DateTimeInterface $lockExpires): self
    {
        $this->lockExpires = $lockExpires;

        return $this;
    }


}
