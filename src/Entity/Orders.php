<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
#[ORM\Table(name: 'orders')]
#[ORM\Entity]
class Orders
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    private $customersId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_ip', type: 'string', length: 50, nullable: false)]
    private $customersIp;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_name', type: 'string', length: 64, nullable: false)]
    private $customersName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_company', type: 'string', length: 32, nullable: true)]
    private $customersCompany;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_street_address', type: 'string', length: 64, nullable: false)]
    private $customersStreetAddress;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_address_line_2', type: 'string', length: 64, nullable: true)]
    private $customersAddressLine2 = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_suburb', type: 'string', length: 32, nullable: true)]
    private $customersSuburb;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_city', type: 'string', length: 32, nullable: false)]
    private $customersCity;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_postcode', type: 'string', length: 10, nullable: false)]
    private $customersPostcode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_state', type: 'string', length: 32, nullable: true)]
    private $customersState;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_country', type: 'string', length: 32, nullable: false)]
    private $customersCountry;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_telephone', type: 'string', length: 32, nullable: false)]
    private $customersTelephone;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_email_address', type: 'string', length: 96, nullable: false)]
    private $customersEmailAddress;

    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_address_format_id', type: 'integer', nullable: false)]
    private $customersAddressFormatId = '0';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'customers_dummy_account', type: 'boolean', nullable: false)]
    private $customersDummyAccount;

    /**
     * @var string
     */
    #[ORM\Column(name: 'delivery_name', type: 'string', length: 64, nullable: false)]
    private $deliveryName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'delivery_company', type: 'string', length: 32, nullable: true)]
    private $deliveryCompany;

    /**
     * @var string
     */
    #[ORM\Column(name: 'delivery_street_address', type: 'string', length: 64, nullable: false)]
    private $deliveryStreetAddress;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'delivery_address_line_2', type: 'string', length: 64, nullable: true)]
    private $deliveryAddressLine2 = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'delivery_suburb', type: 'string', length: 32, nullable: true)]
    private $deliverySuburb;

    /**
     * @var string
     */
    #[ORM\Column(name: 'delivery_city', type: 'string', length: 32, nullable: false)]
    private $deliveryCity;

    /**
     * @var string
     */
    #[ORM\Column(name: 'delivery_postcode', type: 'string', length: 10, nullable: false)]
    private $deliveryPostcode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'delivery_state', type: 'string', length: 32, nullable: true)]
    private $deliveryState;

    /**
     * @var string
     */
    #[ORM\Column(name: 'delivery_country', type: 'string', length: 32, nullable: false)]
    private $deliveryCountry;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'delivery_phone', type: 'string', length: 40, nullable: true)]
    private $deliveryPhone;

    /**
     * @var int
     */
    #[ORM\Column(name: 'delivery_address_format_id', type: 'integer', nullable: false)]
    private $deliveryAddressFormatId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'billing_name', type: 'string', length: 64, nullable: false)]
    private $billingName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_company', type: 'string', length: 32, nullable: true)]
    private $billingCompany;

    /**
     * @var string
     */
    #[ORM\Column(name: 'billing_street_address', type: 'string', length: 64, nullable: false)]
    private $billingStreetAddress;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_address_line_2', type: 'string', length: 64, nullable: true)]
    private $billingAddressLine2 = '';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_suburb', type: 'string', length: 32, nullable: true)]
    private $billingSuburb;

    /**
     * @var string
     */
    #[ORM\Column(name: 'billing_city', type: 'string', length: 32, nullable: false)]
    private $billingCity;

    /**
     * @var string
     */
    #[ORM\Column(name: 'billing_postcode', type: 'string', length: 10, nullable: false)]
    private $billingPostcode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_state', type: 'string', length: 32, nullable: true)]
    private $billingState;

    /**
     * @var string
     */
    #[ORM\Column(name: 'billing_country', type: 'string', length: 32, nullable: false)]
    private $billingCountry;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'billing_phone', type: 'string', length: 40, nullable: true)]
    private $billingPhone;

    /**
     * @var int
     */
    #[ORM\Column(name: 'billing_address_format_id', type: 'integer', nullable: false)]
    private $billingAddressFormatId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'payment_method', type: 'string', length: 32, nullable: false)]
    private $paymentMethod;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cc_type', type: 'string', length: 20, nullable: true)]
    private $ccType;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cc_owner', type: 'string', length: 64, nullable: true)]
    private $ccOwner;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cc_number', type: 'string', length: 32, nullable: true)]
    private $ccNumber;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'cc_expires', type: 'string', length: 4, nullable: true)]
    private $ccExpires;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_purchased', type: 'datetime', nullable: true)]
    private $datePurchased;

    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_status', type: 'integer', nullable: false)]
    private $ordersStatus = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'orders_date_finished', type: 'datetime', nullable: true)]
    private $ordersDateFinished;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'usps_track_num', type: 'string', length: 40, nullable: true)]
    private $uspsTrackNum;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'usps_track_num2', type: 'string', length: 40, nullable: true)]
    private $uspsTrackNum2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ups_track_num', type: 'string', length: 40, nullable: true)]
    private $upsTrackNum;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ups_track_num2', type: 'string', length: 40, nullable: true)]
    private $upsTrackNum2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'fedex_track_num', type: 'string', length: 40, nullable: true)]
    private $fedexTrackNum;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'fedex_track_num2', type: 'string', length: 40, nullable: true)]
    private $fedexTrackNum2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'dhl_track_num', type: 'string', length: 40, nullable: true)]
    private $dhlTrackNum;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'dhl_track_num2', type: 'string', length: 40, nullable: true)]
    private $dhlTrackNum2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'currency', type: 'string', length: 3, nullable: true, options: ['fixed' => true])]
    private $currency;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'currency_value', type: 'decimal', precision: 14, scale: 6, nullable: true)]
    private $currencyValue;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customer_service_id', type: 'string', length: 15, nullable: true)]
    private $customerServiceId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_module', type: 'string', length: 255, nullable: true)]
    private $shippingModule;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ups_track_text', type: 'text', length: 65535, nullable: true)]
    private $upsTrackText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'usps_track_text', type: 'text', length: 65535, nullable: true)]
    private $uspsTrackText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'usps_track_num3', type: 'string', length: 64, nullable: true)]
    private $uspsTrackNum3;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ups_track_num3', type: 'string', length: 64, nullable: true)]
    private $upsTrackNum3;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'fedex_track_num3', type: 'string', length: 64, nullable: true)]
    private $fedexTrackNum3;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ups_track_text2', type: 'text', length: 65535, nullable: true)]
    private $upsTrackText2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'usps_track_text2', type: 'text', length: 65535, nullable: true)]
    private $uspsTrackText2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'ups_track_text3', type: 'text', length: 65535, nullable: true)]
    private $upsTrackText3;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'usps_track_text3', type: 'text', length: 65535, nullable: true)]
    private $uspsTrackText3;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_delivered', type: 'datetime', nullable: true)]
    private $dateDelivered;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'review_notified', type: 'boolean', nullable: false)]
    private $reviewNotified = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_msg', type: 'text', length: 65535, nullable: true)]
    private $giftMsg;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'http_user_agent', type: 'string', length: 512, nullable: true)]
    private $httpUserAgent;

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
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

    public function getCustomersIp(): ?string
    {
        return $this->customersIp;
    }

    public function setCustomersIp(string $customersIp): self
    {
        $this->customersIp = $customersIp;

        return $this;
    }

    public function getCustomersName(): ?string
    {
        return $this->customersName;
    }

    public function setCustomersName(string $customersName): self
    {
        $this->customersName = $customersName;

        return $this;
    }

    public function getCustomersCompany(): ?string
    {
        return $this->customersCompany;
    }

    public function setCustomersCompany(?string $customersCompany): self
    {
        $this->customersCompany = $customersCompany;

        return $this;
    }

    public function getCustomersStreetAddress(): ?string
    {
        return $this->customersStreetAddress;
    }

    public function setCustomersStreetAddress(string $customersStreetAddress): self
    {
        $this->customersStreetAddress = $customersStreetAddress;

        return $this;
    }

    public function getCustomersAddressLine2(): ?string
    {
        return $this->customersAddressLine2;
    }

    public function setCustomersAddressLine2(?string $customersAddressLine2): self
    {
        $this->customersAddressLine2 = $customersAddressLine2;

        return $this;
    }

    public function getCustomersSuburb(): ?string
    {
        return $this->customersSuburb;
    }

    public function setCustomersSuburb(?string $customersSuburb): self
    {
        $this->customersSuburb = $customersSuburb;

        return $this;
    }

    public function getCustomersCity(): ?string
    {
        return $this->customersCity;
    }

    public function setCustomersCity(string $customersCity): self
    {
        $this->customersCity = $customersCity;

        return $this;
    }

    public function getCustomersPostcode(): ?string
    {
        return $this->customersPostcode;
    }

    public function setCustomersPostcode(string $customersPostcode): self
    {
        $this->customersPostcode = $customersPostcode;

        return $this;
    }

    public function getCustomersState(): ?string
    {
        return $this->customersState;
    }

    public function setCustomersState(?string $customersState): self
    {
        $this->customersState = $customersState;

        return $this;
    }

    public function getCustomersCountry(): ?string
    {
        return $this->customersCountry;
    }

    public function setCustomersCountry(string $customersCountry): self
    {
        $this->customersCountry = $customersCountry;

        return $this;
    }

    public function getCustomersTelephone(): ?string
    {
        return $this->customersTelephone;
    }

    public function setCustomersTelephone(string $customersTelephone): self
    {
        $this->customersTelephone = $customersTelephone;

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

    public function getCustomersAddressFormatId(): ?int
    {
        return $this->customersAddressFormatId;
    }

    public function setCustomersAddressFormatId(int $customersAddressFormatId): self
    {
        $this->customersAddressFormatId = $customersAddressFormatId;

        return $this;
    }

    public function getCustomersDummyAccount(): ?bool
    {
        return $this->customersDummyAccount;
    }

    public function setCustomersDummyAccount(bool $customersDummyAccount): self
    {
        $this->customersDummyAccount = $customersDummyAccount;

        return $this;
    }

    public function getDeliveryName(): ?string
    {
        return $this->deliveryName;
    }

    public function setDeliveryName(string $deliveryName): self
    {
        $this->deliveryName = $deliveryName;

        return $this;
    }

    public function getDeliveryCompany(): ?string
    {
        return $this->deliveryCompany;
    }

    public function setDeliveryCompany(?string $deliveryCompany): self
    {
        $this->deliveryCompany = $deliveryCompany;

        return $this;
    }

    public function getDeliveryStreetAddress(): ?string
    {
        return $this->deliveryStreetAddress;
    }

    public function setDeliveryStreetAddress(string $deliveryStreetAddress): self
    {
        $this->deliveryStreetAddress = $deliveryStreetAddress;

        return $this;
    }

    public function getDeliveryAddressLine2(): ?string
    {
        return $this->deliveryAddressLine2;
    }

    public function setDeliveryAddressLine2(?string $deliveryAddressLine2): self
    {
        $this->deliveryAddressLine2 = $deliveryAddressLine2;

        return $this;
    }

    public function getDeliverySuburb(): ?string
    {
        return $this->deliverySuburb;
    }

    public function setDeliverySuburb(?string $deliverySuburb): self
    {
        $this->deliverySuburb = $deliverySuburb;

        return $this;
    }

    public function getDeliveryCity(): ?string
    {
        return $this->deliveryCity;
    }

    public function setDeliveryCity(string $deliveryCity): self
    {
        $this->deliveryCity = $deliveryCity;

        return $this;
    }

    public function getDeliveryPostcode(): ?string
    {
        return $this->deliveryPostcode;
    }

    public function setDeliveryPostcode(string $deliveryPostcode): self
    {
        $this->deliveryPostcode = $deliveryPostcode;

        return $this;
    }

    public function getDeliveryState(): ?string
    {
        return $this->deliveryState;
    }

    public function setDeliveryState(?string $deliveryState): self
    {
        $this->deliveryState = $deliveryState;

        return $this;
    }

    public function getDeliveryCountry(): ?string
    {
        return $this->deliveryCountry;
    }

    public function setDeliveryCountry(string $deliveryCountry): self
    {
        $this->deliveryCountry = $deliveryCountry;

        return $this;
    }

    public function getDeliveryPhone(): ?string
    {
        return $this->deliveryPhone;
    }

    public function setDeliveryPhone(?string $deliveryPhone): self
    {
        $this->deliveryPhone = $deliveryPhone;

        return $this;
    }

    public function getDeliveryAddressFormatId(): ?int
    {
        return $this->deliveryAddressFormatId;
    }

    public function setDeliveryAddressFormatId(int $deliveryAddressFormatId): self
    {
        $this->deliveryAddressFormatId = $deliveryAddressFormatId;

        return $this;
    }

    public function getBillingName(): ?string
    {
        return $this->billingName;
    }

    public function setBillingName(string $billingName): self
    {
        $this->billingName = $billingName;

        return $this;
    }

    public function getBillingCompany(): ?string
    {
        return $this->billingCompany;
    }

    public function setBillingCompany(?string $billingCompany): self
    {
        $this->billingCompany = $billingCompany;

        return $this;
    }

    public function getBillingStreetAddress(): ?string
    {
        return $this->billingStreetAddress;
    }

    public function setBillingStreetAddress(string $billingStreetAddress): self
    {
        $this->billingStreetAddress = $billingStreetAddress;

        return $this;
    }

    public function getBillingAddressLine2(): ?string
    {
        return $this->billingAddressLine2;
    }

    public function setBillingAddressLine2(?string $billingAddressLine2): self
    {
        $this->billingAddressLine2 = $billingAddressLine2;

        return $this;
    }

    public function getBillingSuburb(): ?string
    {
        return $this->billingSuburb;
    }

    public function setBillingSuburb(?string $billingSuburb): self
    {
        $this->billingSuburb = $billingSuburb;

        return $this;
    }

    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    public function setBillingCity(string $billingCity): self
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    public function getBillingPostcode(): ?string
    {
        return $this->billingPostcode;
    }

    public function setBillingPostcode(string $billingPostcode): self
    {
        $this->billingPostcode = $billingPostcode;

        return $this;
    }

    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    public function setBillingState(?string $billingState): self
    {
        $this->billingState = $billingState;

        return $this;
    }

    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    public function setBillingCountry(string $billingCountry): self
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    public function getBillingPhone(): ?string
    {
        return $this->billingPhone;
    }

    public function setBillingPhone(?string $billingPhone): self
    {
        $this->billingPhone = $billingPhone;

        return $this;
    }

    public function getBillingAddressFormatId(): ?int
    {
        return $this->billingAddressFormatId;
    }

    public function setBillingAddressFormatId(int $billingAddressFormatId): self
    {
        $this->billingAddressFormatId = $billingAddressFormatId;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getCcType(): ?string
    {
        return $this->ccType;
    }

    public function setCcType(?string $ccType): self
    {
        $this->ccType = $ccType;

        return $this;
    }

    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }

    public function setCcOwner(?string $ccOwner): self
    {
        $this->ccOwner = $ccOwner;

        return $this;
    }

    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }

    public function setCcNumber(?string $ccNumber): self
    {
        $this->ccNumber = $ccNumber;

        return $this;
    }

    public function getCcExpires(): ?string
    {
        return $this->ccExpires;
    }

    public function setCcExpires(?string $ccExpires): self
    {
        $this->ccExpires = $ccExpires;

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

    public function getDatePurchased(): ?\DateTimeInterface
    {
        return $this->datePurchased;
    }

    public function setDatePurchased(?\DateTimeInterface $datePurchased): self
    {
        $this->datePurchased = $datePurchased;

        return $this;
    }

    public function getOrdersStatus(): ?int
    {
        return $this->ordersStatus;
    }

    public function setOrdersStatus(int $ordersStatus): self
    {
        $this->ordersStatus = $ordersStatus;

        return $this;
    }

    public function getOrdersDateFinished(): ?\DateTimeInterface
    {
        return $this->ordersDateFinished;
    }

    public function setOrdersDateFinished(?\DateTimeInterface $ordersDateFinished): self
    {
        $this->ordersDateFinished = $ordersDateFinished;

        return $this;
    }

    public function getUspsTrackNum(): ?string
    {
        return $this->uspsTrackNum;
    }

    public function setUspsTrackNum(?string $uspsTrackNum): self
    {
        $this->uspsTrackNum = $uspsTrackNum;

        return $this;
    }

    public function getUspsTrackNum2(): ?string
    {
        return $this->uspsTrackNum2;
    }

    public function setUspsTrackNum2(?string $uspsTrackNum2): self
    {
        $this->uspsTrackNum2 = $uspsTrackNum2;

        return $this;
    }

    public function getUpsTrackNum(): ?string
    {
        return $this->upsTrackNum;
    }

    public function setUpsTrackNum(?string $upsTrackNum): self
    {
        $this->upsTrackNum = $upsTrackNum;

        return $this;
    }

    public function getUpsTrackNum2(): ?string
    {
        return $this->upsTrackNum2;
    }

    public function setUpsTrackNum2(?string $upsTrackNum2): self
    {
        $this->upsTrackNum2 = $upsTrackNum2;

        return $this;
    }

    public function getFedexTrackNum(): ?string
    {
        return $this->fedexTrackNum;
    }

    public function setFedexTrackNum(?string $fedexTrackNum): self
    {
        $this->fedexTrackNum = $fedexTrackNum;

        return $this;
    }

    public function getFedexTrackNum2(): ?string
    {
        return $this->fedexTrackNum2;
    }

    public function setFedexTrackNum2(?string $fedexTrackNum2): self
    {
        $this->fedexTrackNum2 = $fedexTrackNum2;

        return $this;
    }

    public function getDhlTrackNum(): ?string
    {
        return $this->dhlTrackNum;
    }

    public function setDhlTrackNum(?string $dhlTrackNum): self
    {
        $this->dhlTrackNum = $dhlTrackNum;

        return $this;
    }

    public function getDhlTrackNum2(): ?string
    {
        return $this->dhlTrackNum2;
    }

    public function setDhlTrackNum2(?string $dhlTrackNum2): self
    {
        $this->dhlTrackNum2 = $dhlTrackNum2;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCurrencyValue(): ?string
    {
        return $this->currencyValue;
    }

    public function setCurrencyValue(?string $currencyValue): self
    {
        $this->currencyValue = $currencyValue;

        return $this;
    }

    public function getCustomerServiceId(): ?string
    {
        return $this->customerServiceId;
    }

    public function setCustomerServiceId(?string $customerServiceId): self
    {
        $this->customerServiceId = $customerServiceId;

        return $this;
    }

    public function getShippingModule(): ?string
    {
        return $this->shippingModule;
    }

    public function setShippingModule(?string $shippingModule): self
    {
        $this->shippingModule = $shippingModule;

        return $this;
    }

    public function getUpsTrackText(): ?string
    {
        return $this->upsTrackText;
    }

    public function setUpsTrackText(?string $upsTrackText): self
    {
        $this->upsTrackText = $upsTrackText;

        return $this;
    }

    public function getUspsTrackText(): ?string
    {
        return $this->uspsTrackText;
    }

    public function setUspsTrackText(?string $uspsTrackText): self
    {
        $this->uspsTrackText = $uspsTrackText;

        return $this;
    }

    public function getUspsTrackNum3(): ?string
    {
        return $this->uspsTrackNum3;
    }

    public function setUspsTrackNum3(?string $uspsTrackNum3): self
    {
        $this->uspsTrackNum3 = $uspsTrackNum3;

        return $this;
    }

    public function getUpsTrackNum3(): ?string
    {
        return $this->upsTrackNum3;
    }

    public function setUpsTrackNum3(?string $upsTrackNum3): self
    {
        $this->upsTrackNum3 = $upsTrackNum3;

        return $this;
    }

    public function getFedexTrackNum3(): ?string
    {
        return $this->fedexTrackNum3;
    }

    public function setFedexTrackNum3(?string $fedexTrackNum3): self
    {
        $this->fedexTrackNum3 = $fedexTrackNum3;

        return $this;
    }

    public function getUpsTrackText2(): ?string
    {
        return $this->upsTrackText2;
    }

    public function setUpsTrackText2(?string $upsTrackText2): self
    {
        $this->upsTrackText2 = $upsTrackText2;

        return $this;
    }

    public function getUspsTrackText2(): ?string
    {
        return $this->uspsTrackText2;
    }

    public function setUspsTrackText2(?string $uspsTrackText2): self
    {
        $this->uspsTrackText2 = $uspsTrackText2;

        return $this;
    }

    public function getUpsTrackText3(): ?string
    {
        return $this->upsTrackText3;
    }

    public function setUpsTrackText3(?string $upsTrackText3): self
    {
        $this->upsTrackText3 = $upsTrackText3;

        return $this;
    }

    public function getUspsTrackText3(): ?string
    {
        return $this->uspsTrackText3;
    }

    public function setUspsTrackText3(?string $uspsTrackText3): self
    {
        $this->uspsTrackText3 = $uspsTrackText3;

        return $this;
    }

    public function getDateDelivered(): ?\DateTimeInterface
    {
        return $this->dateDelivered;
    }

    public function setDateDelivered(?\DateTimeInterface $dateDelivered): self
    {
        $this->dateDelivered = $dateDelivered;

        return $this;
    }

    public function getReviewNotified(): ?bool
    {
        return $this->reviewNotified;
    }

    public function setReviewNotified(bool $reviewNotified): self
    {
        $this->reviewNotified = $reviewNotified;

        return $this;
    }

    public function getGiftMsg(): ?string
    {
        return $this->giftMsg;
    }

    public function setGiftMsg(?string $giftMsg): self
    {
        $this->giftMsg = $giftMsg;

        return $this;
    }

    public function getHttpUserAgent(): ?string
    {
        return $this->httpUserAgent;
    }

    public function setHttpUserAgent(?string $httpUserAgent): self
    {
        $this->httpUserAgent = $httpUserAgent;

        return $this;
    }


}
