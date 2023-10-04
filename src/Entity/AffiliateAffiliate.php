<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateAffiliate
 */
#[ORM\Table(name: 'affiliate_affiliate')]
#[ORM\Entity]
class AffiliateAffiliate
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $affiliateId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'affiliate_gender', type: 'string', length: 1, nullable: true, options: ['fixed' => true])]
    private $affiliateGender;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_firstname', type: 'string', length: 32, nullable: false)]
    private $affiliateFirstname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_lastname', type: 'string', length: 32, nullable: false)]
    private $affiliateLastname;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_dob', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDob = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_email_address', type: 'string', length: 96, nullable: false)]
    private $affiliateEmailAddress;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_telephone', type: 'string', length: 32, nullable: false)]
    private $affiliateTelephone;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_fax', type: 'string', length: 32, nullable: false)]
    private $affiliateFax;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_password', type: 'string', length: 40, nullable: false)]
    private $affiliatePassword;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_homepage', type: 'string', length: 96, nullable: false)]
    private $affiliateHomepage;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_street_address', type: 'string', length: 64, nullable: false)]
    private $affiliateStreetAddress;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'affiliate_suburb', type: 'string', length: 64, nullable: true)]
    private $affiliateSuburb;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_city', type: 'string', length: 32, nullable: false)]
    private $affiliateCity;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_postcode', type: 'string', length: 10, nullable: false)]
    private $affiliatePostcode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_state', type: 'string', length: 32, nullable: false)]
    private $affiliateState;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_country_id', type: 'integer', nullable: false)]
    private $affiliateCountryId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_zone_id', type: 'integer', nullable: false)]
    private $affiliateZoneId = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'affiliate_agb', type: 'boolean', nullable: false)]
    private $affiliateAgb = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_company', type: 'string', length: 60, nullable: false)]
    private $affiliateCompany;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_company_taxid', type: 'string', length: 64, nullable: false)]
    private $affiliateCompanyTaxid;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_commission_percent', type: 'decimal', precision: 4, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $affiliateCommissionPercent = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_check', type: 'string', length: 100, nullable: false)]
    private $affiliatePaymentCheck;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_paypal', type: 'string', length: 64, nullable: false)]
    private $affiliatePaymentPaypal;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_bank_name', type: 'string', length: 64, nullable: false)]
    private $affiliatePaymentBankName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_bank_branch_number', type: 'string', length: 64, nullable: false)]
    private $affiliatePaymentBankBranchNumber;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_bank_swift_code', type: 'string', length: 64, nullable: false)]
    private $affiliatePaymentBankSwiftCode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_bank_account_name', type: 'string', length: 64, nullable: false)]
    private $affiliatePaymentBankAccountName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_payment_bank_account_number', type: 'string', length: 64, nullable: false)]
    private $affiliatePaymentBankAccountNumber;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_date_of_last_logon', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDateOfLastLogon = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_number_of_logons', type: 'integer', nullable: false)]
    private $affiliateNumberOfLogons = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_date_account_created', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDateAccountCreated = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'affiliate_date_account_last_modified', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $affiliateDateAccountLastModified = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_lft', type: 'integer', nullable: false)]
    private $affiliateLft;

    /**
     * @var int
     */
    #[ORM\Column(name: 'affiliate_rgt', type: 'integer', nullable: false)]
    private $affiliateRgt;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'affiliate_root', type: 'integer', nullable: true)]
    private $affiliateRoot;

    /**
     * @var string
     */
    #[ORM\Column(name: 'affiliate_newsletter', type: 'string', length: 1, nullable: false, options: ['default' => 1, 'fixed' => true])]
    private $affiliateNewsletter = '1';

    public function getAffiliateId(): ?int
    {
        return $this->affiliateId;
    }

    public function getAffiliateGender(): ?string
    {
        return $this->affiliateGender;
    }

    public function setAffiliateGender(?string $affiliateGender): self
    {
        $this->affiliateGender = $affiliateGender;

        return $this;
    }

    public function getAffiliateFirstname(): ?string
    {
        return $this->affiliateFirstname;
    }

    public function setAffiliateFirstname(string $affiliateFirstname): self
    {
        $this->affiliateFirstname = $affiliateFirstname;

        return $this;
    }

    public function getAffiliateLastname(): ?string
    {
        return $this->affiliateLastname;
    }

    public function setAffiliateLastname(string $affiliateLastname): self
    {
        $this->affiliateLastname = $affiliateLastname;

        return $this;
    }

    public function getAffiliateDob(): ?\DateTimeInterface
    {
        return $this->affiliateDob;
    }

    public function setAffiliateDob(\DateTimeInterface $affiliateDob): self
    {
        $this->affiliateDob = $affiliateDob;

        return $this;
    }

    public function getAffiliateEmailAddress(): ?string
    {
        return $this->affiliateEmailAddress;
    }

    public function setAffiliateEmailAddress(string $affiliateEmailAddress): self
    {
        $this->affiliateEmailAddress = $affiliateEmailAddress;

        return $this;
    }

    public function getAffiliateTelephone(): ?string
    {
        return $this->affiliateTelephone;
    }

    public function setAffiliateTelephone(string $affiliateTelephone): self
    {
        $this->affiliateTelephone = $affiliateTelephone;

        return $this;
    }

    public function getAffiliateFax(): ?string
    {
        return $this->affiliateFax;
    }

    public function setAffiliateFax(string $affiliateFax): self
    {
        $this->affiliateFax = $affiliateFax;

        return $this;
    }

    public function getAffiliatePassword(): ?string
    {
        return $this->affiliatePassword;
    }

    public function setAffiliatePassword(string $affiliatePassword): self
    {
        $this->affiliatePassword = $affiliatePassword;

        return $this;
    }

    public function getAffiliateHomepage(): ?string
    {
        return $this->affiliateHomepage;
    }

    public function setAffiliateHomepage(string $affiliateHomepage): self
    {
        $this->affiliateHomepage = $affiliateHomepage;

        return $this;
    }

    public function getAffiliateStreetAddress(): ?string
    {
        return $this->affiliateStreetAddress;
    }

    public function setAffiliateStreetAddress(string $affiliateStreetAddress): self
    {
        $this->affiliateStreetAddress = $affiliateStreetAddress;

        return $this;
    }

    public function getAffiliateSuburb(): ?string
    {
        return $this->affiliateSuburb;
    }

    public function setAffiliateSuburb(?string $affiliateSuburb): self
    {
        $this->affiliateSuburb = $affiliateSuburb;

        return $this;
    }

    public function getAffiliateCity(): ?string
    {
        return $this->affiliateCity;
    }

    public function setAffiliateCity(string $affiliateCity): self
    {
        $this->affiliateCity = $affiliateCity;

        return $this;
    }

    public function getAffiliatePostcode(): ?string
    {
        return $this->affiliatePostcode;
    }

    public function setAffiliatePostcode(string $affiliatePostcode): self
    {
        $this->affiliatePostcode = $affiliatePostcode;

        return $this;
    }

    public function getAffiliateState(): ?string
    {
        return $this->affiliateState;
    }

    public function setAffiliateState(string $affiliateState): self
    {
        $this->affiliateState = $affiliateState;

        return $this;
    }

    public function getAffiliateCountryId(): ?int
    {
        return $this->affiliateCountryId;
    }

    public function setAffiliateCountryId(int $affiliateCountryId): self
    {
        $this->affiliateCountryId = $affiliateCountryId;

        return $this;
    }

    public function getAffiliateZoneId(): ?int
    {
        return $this->affiliateZoneId;
    }

    public function setAffiliateZoneId(int $affiliateZoneId): self
    {
        $this->affiliateZoneId = $affiliateZoneId;

        return $this;
    }

    public function getAffiliateAgb(): ?bool
    {
        return $this->affiliateAgb;
    }

    public function setAffiliateAgb(bool $affiliateAgb): self
    {
        $this->affiliateAgb = $affiliateAgb;

        return $this;
    }

    public function getAffiliateCompany(): ?string
    {
        return $this->affiliateCompany;
    }

    public function setAffiliateCompany(string $affiliateCompany): self
    {
        $this->affiliateCompany = $affiliateCompany;

        return $this;
    }

    public function getAffiliateCompanyTaxid(): ?string
    {
        return $this->affiliateCompanyTaxid;
    }

    public function setAffiliateCompanyTaxid(string $affiliateCompanyTaxid): self
    {
        $this->affiliateCompanyTaxid = $affiliateCompanyTaxid;

        return $this;
    }

    public function getAffiliateCommissionPercent(): ?string
    {
        return $this->affiliateCommissionPercent;
    }

    public function setAffiliateCommissionPercent(string $affiliateCommissionPercent): self
    {
        $this->affiliateCommissionPercent = $affiliateCommissionPercent;

        return $this;
    }

    public function getAffiliatePaymentCheck(): ?string
    {
        return $this->affiliatePaymentCheck;
    }

    public function setAffiliatePaymentCheck(string $affiliatePaymentCheck): self
    {
        $this->affiliatePaymentCheck = $affiliatePaymentCheck;

        return $this;
    }

    public function getAffiliatePaymentPaypal(): ?string
    {
        return $this->affiliatePaymentPaypal;
    }

    public function setAffiliatePaymentPaypal(string $affiliatePaymentPaypal): self
    {
        $this->affiliatePaymentPaypal = $affiliatePaymentPaypal;

        return $this;
    }

    public function getAffiliatePaymentBankName(): ?string
    {
        return $this->affiliatePaymentBankName;
    }

    public function setAffiliatePaymentBankName(string $affiliatePaymentBankName): self
    {
        $this->affiliatePaymentBankName = $affiliatePaymentBankName;

        return $this;
    }

    public function getAffiliatePaymentBankBranchNumber(): ?string
    {
        return $this->affiliatePaymentBankBranchNumber;
    }

    public function setAffiliatePaymentBankBranchNumber(string $affiliatePaymentBankBranchNumber): self
    {
        $this->affiliatePaymentBankBranchNumber = $affiliatePaymentBankBranchNumber;

        return $this;
    }

    public function getAffiliatePaymentBankSwiftCode(): ?string
    {
        return $this->affiliatePaymentBankSwiftCode;
    }

    public function setAffiliatePaymentBankSwiftCode(string $affiliatePaymentBankSwiftCode): self
    {
        $this->affiliatePaymentBankSwiftCode = $affiliatePaymentBankSwiftCode;

        return $this;
    }

    public function getAffiliatePaymentBankAccountName(): ?string
    {
        return $this->affiliatePaymentBankAccountName;
    }

    public function setAffiliatePaymentBankAccountName(string $affiliatePaymentBankAccountName): self
    {
        $this->affiliatePaymentBankAccountName = $affiliatePaymentBankAccountName;

        return $this;
    }

    public function getAffiliatePaymentBankAccountNumber(): ?string
    {
        return $this->affiliatePaymentBankAccountNumber;
    }

    public function setAffiliatePaymentBankAccountNumber(string $affiliatePaymentBankAccountNumber): self
    {
        $this->affiliatePaymentBankAccountNumber = $affiliatePaymentBankAccountNumber;

        return $this;
    }

    public function getAffiliateDateOfLastLogon(): ?\DateTimeInterface
    {
        return $this->affiliateDateOfLastLogon;
    }

    public function setAffiliateDateOfLastLogon(\DateTimeInterface $affiliateDateOfLastLogon): self
    {
        $this->affiliateDateOfLastLogon = $affiliateDateOfLastLogon;

        return $this;
    }

    public function getAffiliateNumberOfLogons(): ?int
    {
        return $this->affiliateNumberOfLogons;
    }

    public function setAffiliateNumberOfLogons(int $affiliateNumberOfLogons): self
    {
        $this->affiliateNumberOfLogons = $affiliateNumberOfLogons;

        return $this;
    }

    public function getAffiliateDateAccountCreated(): ?\DateTimeInterface
    {
        return $this->affiliateDateAccountCreated;
    }

    public function setAffiliateDateAccountCreated(\DateTimeInterface $affiliateDateAccountCreated): self
    {
        $this->affiliateDateAccountCreated = $affiliateDateAccountCreated;

        return $this;
    }

    public function getAffiliateDateAccountLastModified(): ?\DateTimeInterface
    {
        return $this->affiliateDateAccountLastModified;
    }

    public function setAffiliateDateAccountLastModified(\DateTimeInterface $affiliateDateAccountLastModified): self
    {
        $this->affiliateDateAccountLastModified = $affiliateDateAccountLastModified;

        return $this;
    }

    public function getAffiliateLft(): ?int
    {
        return $this->affiliateLft;
    }

    public function setAffiliateLft(int $affiliateLft): self
    {
        $this->affiliateLft = $affiliateLft;

        return $this;
    }

    public function getAffiliateRgt(): ?int
    {
        return $this->affiliateRgt;
    }

    public function setAffiliateRgt(int $affiliateRgt): self
    {
        $this->affiliateRgt = $affiliateRgt;

        return $this;
    }

    public function getAffiliateRoot(): ?int
    {
        return $this->affiliateRoot;
    }

    public function setAffiliateRoot(?int $affiliateRoot): self
    {
        $this->affiliateRoot = $affiliateRoot;

        return $this;
    }

    public function getAffiliateNewsletter(): ?string
    {
        return $this->affiliateNewsletter;
    }

    public function setAffiliateNewsletter(string $affiliateNewsletter): self
    {
        $this->affiliateNewsletter = $affiliateNewsletter;

        return $this;
    }


}
