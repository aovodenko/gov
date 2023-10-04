<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JetReturns
 */
#[ORM\Table(name: 'jet_returns')]
#[ORM\Entity]
class JetReturns
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'merchant_return_authorization_id', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $merchantReturnAuthorizationId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'merchant_order_id', type: 'string', length: 255, nullable: true)]
    private $merchantOrderId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'reference_order_id', type: 'string', length: 255, nullable: true)]
    private $referenceOrderId;

    /**
     * @var float|null
     */
    #[ORM\Column(name: 'merchant_return_charge', type: 'float', precision: 7, scale: 2, nullable: true, options: ['default' => '0.00'])]
    private $merchantReturnCharge = 0.00;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'refund_without_return', type: 'boolean', nullable: true)]
    private $refundWithoutReturn = '0';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'return_date', type: 'datetime', nullable: true)]
    private $returnDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'return_status', type: 'string', length: 32, nullable: true)]
    private $returnStatus;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'shipping_carrier', type: 'string', length: 255, nullable: true)]
    private $shippingCarrier;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'tracking_number', type: 'string', length: 255, nullable: true)]
    private $trackingNumber;

    public function getMerchantReturnAuthorizationId(): ?string
    {
        return $this->merchantReturnAuthorizationId;
    }

    public function getMerchantOrderId(): ?string
    {
        return $this->merchantOrderId;
    }

    public function setMerchantOrderId(?string $merchantOrderId): self
    {
        $this->merchantOrderId = $merchantOrderId;

        return $this;
    }

    public function getReferenceOrderId(): ?string
    {
        return $this->referenceOrderId;
    }

    public function setReferenceOrderId(?string $referenceOrderId): self
    {
        $this->referenceOrderId = $referenceOrderId;

        return $this;
    }

    public function getMerchantReturnCharge(): ?float
    {
        return $this->merchantReturnCharge;
    }

    public function setMerchantReturnCharge(?float $merchantReturnCharge): self
    {
        $this->merchantReturnCharge = $merchantReturnCharge;

        return $this;
    }

    public function getRefundWithoutReturn(): ?bool
    {
        return $this->refundWithoutReturn;
    }

    public function setRefundWithoutReturn(?bool $refundWithoutReturn): self
    {
        $this->refundWithoutReturn = $refundWithoutReturn;

        return $this;
    }

    public function getReturnDate(): ?\DateTimeInterface
    {
        return $this->returnDate;
    }

    public function setReturnDate(?\DateTimeInterface $returnDate): self
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    public function getReturnStatus(): ?string
    {
        return $this->returnStatus;
    }

    public function setReturnStatus(?string $returnStatus): self
    {
        $this->returnStatus = $returnStatus;

        return $this;
    }

    public function getShippingCarrier(): ?string
    {
        return $this->shippingCarrier;
    }

    public function setShippingCarrier(?string $shippingCarrier): self
    {
        $this->shippingCarrier = $shippingCarrier;

        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }


}
