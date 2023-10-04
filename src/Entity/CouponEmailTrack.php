<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CouponEmailTrack
 */
#[ORM\Table(name: 'coupon_email_track')]
#[ORM\Entity]
class CouponEmailTrack
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'unique_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $uniqueId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'coupon_id', type: 'integer', nullable: false)]
    private $couponId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'customer_id_sent', type: 'integer', nullable: false)]
    private $customerIdSent = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sent_firstname', type: 'string', length: 32, nullable: true)]
    private $sentFirstname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sent_lastname', type: 'string', length: 32, nullable: true)]
    private $sentLastname;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'emailed_to', type: 'string', length: 32, nullable: true)]
    private $emailedTo;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_sent', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateSent = '0000-00-00 00:00:00';

    public function getUniqueId(): ?int
    {
        return $this->uniqueId;
    }

    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    public function setCouponId(int $couponId): self
    {
        $this->couponId = $couponId;

        return $this;
    }

    public function getCustomerIdSent(): ?int
    {
        return $this->customerIdSent;
    }

    public function setCustomerIdSent(int $customerIdSent): self
    {
        $this->customerIdSent = $customerIdSent;

        return $this;
    }

    public function getSentFirstname(): ?string
    {
        return $this->sentFirstname;
    }

    public function setSentFirstname(?string $sentFirstname): self
    {
        $this->sentFirstname = $sentFirstname;

        return $this;
    }

    public function getSentLastname(): ?string
    {
        return $this->sentLastname;
    }

    public function setSentLastname(?string $sentLastname): self
    {
        $this->sentLastname = $sentLastname;

        return $this;
    }

    public function getEmailedTo(): ?string
    {
        return $this->emailedTo;
    }

    public function setEmailedTo(?string $emailedTo): self
    {
        $this->emailedTo = $emailedTo;

        return $this;
    }

    public function getDateSent(): ?\DateTimeInterface
    {
        return $this->dateSent;
    }

    public function setDateSent(\DateTimeInterface $dateSent): self
    {
        $this->dateSent = $dateSent;

        return $this;
    }


}
