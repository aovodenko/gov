<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomersInfo
 */
#[ORM\Table(name: 'customers_info')]
#[ORM\Entity]
class CustomersInfo
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_info_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersInfoId = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'customers_info_date_of_last_logon', type: 'datetime', nullable: true)]
    private $customersInfoDateOfLastLogon;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'customers_info_number_of_logons', type: 'integer', nullable: true)]
    private $customersInfoNumberOfLogons;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'customers_info_date_account_created', type: 'datetime', nullable: true)]
    private $customersInfoDateAccountCreated;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'customers_info_date_account_last_modified', type: 'datetime', nullable: true)]
    private $customersInfoDateAccountLastModified;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'global_product_notifications', type: 'integer', nullable: true)]
    private $globalProductNotifications = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'unbxd_userId', type: 'string', length: 128, nullable: true)]
    private $unbxdUserid;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'product_info_timestamp', type: 'datetime', nullable: true)]
    private $productInfoTimestamp;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'browse_reminder_sent', type: 'datetime', nullable: true)]
    private $browseReminderSent;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'mailchimp_processed', type: 'integer', nullable: true)]
    private $mailchimpProcessed = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'mailchimp_pre_processed', type: 'string', length: 255, nullable: true)]
    private $mailchimpPreProcessed;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customers_ip', type: 'string', length: 50, nullable: true)]
    private $customersIp;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'customers_reengagement_sent', type: 'datetime', nullable: true)]
    private $customersReengagementSent;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'subscribe_mc_sent', type: 'datetime', nullable: true)]
    private $subscribeMcSent;

    public function getCustomersInfoId(): ?int
    {
        return $this->customersInfoId;
    }

    public function getCustomersInfoDateOfLastLogon(): ?\DateTimeInterface
    {
        return $this->customersInfoDateOfLastLogon;
    }

    public function setCustomersInfoDateOfLastLogon(?\DateTimeInterface $customersInfoDateOfLastLogon): self
    {
        $this->customersInfoDateOfLastLogon = $customersInfoDateOfLastLogon;

        return $this;
    }

    public function getCustomersInfoNumberOfLogons(): ?int
    {
        return $this->customersInfoNumberOfLogons;
    }

    public function setCustomersInfoNumberOfLogons(?int $customersInfoNumberOfLogons): self
    {
        $this->customersInfoNumberOfLogons = $customersInfoNumberOfLogons;

        return $this;
    }

    public function getCustomersInfoDateAccountCreated(): ?\DateTimeInterface
    {
        return $this->customersInfoDateAccountCreated;
    }

    public function setCustomersInfoDateAccountCreated(?\DateTimeInterface $customersInfoDateAccountCreated): self
    {
        $this->customersInfoDateAccountCreated = $customersInfoDateAccountCreated;

        return $this;
    }

    public function getCustomersInfoDateAccountLastModified(): ?\DateTimeInterface
    {
        return $this->customersInfoDateAccountLastModified;
    }

    public function setCustomersInfoDateAccountLastModified(?\DateTimeInterface $customersInfoDateAccountLastModified): self
    {
        $this->customersInfoDateAccountLastModified = $customersInfoDateAccountLastModified;

        return $this;
    }

    public function getGlobalProductNotifications(): ?int
    {
        return $this->globalProductNotifications;
    }

    public function setGlobalProductNotifications(?int $globalProductNotifications): self
    {
        $this->globalProductNotifications = $globalProductNotifications;

        return $this;
    }

    public function getUnbxdUserid(): ?string
    {
        return $this->unbxdUserid;
    }

    public function setUnbxdUserid(?string $unbxdUserid): self
    {
        $this->unbxdUserid = $unbxdUserid;

        return $this;
    }

    public function getProductInfoTimestamp(): ?\DateTimeInterface
    {
        return $this->productInfoTimestamp;
    }

    public function setProductInfoTimestamp(?\DateTimeInterface $productInfoTimestamp): self
    {
        $this->productInfoTimestamp = $productInfoTimestamp;

        return $this;
    }

    public function getBrowseReminderSent(): ?\DateTimeInterface
    {
        return $this->browseReminderSent;
    }

    public function setBrowseReminderSent(?\DateTimeInterface $browseReminderSent): self
    {
        $this->browseReminderSent = $browseReminderSent;

        return $this;
    }

    public function getMailchimpProcessed(): ?int
    {
        return $this->mailchimpProcessed;
    }

    public function setMailchimpProcessed(?int $mailchimpProcessed): self
    {
        $this->mailchimpProcessed = $mailchimpProcessed;

        return $this;
    }

    public function getMailchimpPreProcessed(): ?string
    {
        return $this->mailchimpPreProcessed;
    }

    public function setMailchimpPreProcessed(?string $mailchimpPreProcessed): self
    {
        $this->mailchimpPreProcessed = $mailchimpPreProcessed;

        return $this;
    }

    public function getCustomersIp(): ?string
    {
        return $this->customersIp;
    }

    public function setCustomersIp(?string $customersIp): self
    {
        $this->customersIp = $customersIp;

        return $this;
    }

    public function getCustomersReengagementSent(): ?\DateTimeInterface
    {
        return $this->customersReengagementSent;
    }

    public function setCustomersReengagementSent(?\DateTimeInterface $customersReengagementSent): self
    {
        $this->customersReengagementSent = $customersReengagementSent;

        return $this;
    }

    public function getSubscribeMcSent(): ?\DateTimeInterface
    {
        return $this->subscribeMcSent;
    }

    public function setSubscribeMcSent(?\DateTimeInterface $subscribeMcSent): self
    {
        $this->subscribeMcSent = $subscribeMcSent;

        return $this;
    }


}
