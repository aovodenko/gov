<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersStatusHistoryTransactions
 */
#[ORM\Table(name: 'orders_status_history_transactions')]
#[ORM\Index(name: 'transaction_id', columns: ['transaction_id'])]
#[ORM\Entity]
class OrdersStatusHistoryTransactions
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_status_history_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersStatusHistoryId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'transaction_id', type: 'string', length: 64, nullable: false)]
    private $transactionId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'transaction_type', type: 'string', length: 32, nullable: false)]
    private $transactionType;

    /**
     * @var string
     */
    #[ORM\Column(name: 'payment_type', type: 'string', length: 32, nullable: false)]
    private $paymentType;

    /**
     * @var string
     */
    #[ORM\Column(name: 'payment_status', type: 'string', length: 32, nullable: false)]
    private $paymentStatus;

    /**
     * @var string
     */
    #[ORM\Column(name: 'transaction_amount', type: 'decimal', precision: 7, scale: 2, nullable: false)]
    private $transactionAmount;

    /**
     * @var string
     */
    #[ORM\Column(name: 'module_code', type: 'string', length: 32, nullable: false)]
    private $moduleCode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'transaction_avs', type: 'string', length: 64, nullable: false)]
    private $transactionAvs;

    /**
     * @var string
     */
    #[ORM\Column(name: 'transaction_cvv2', type: 'string', length: 64, nullable: false)]
    private $transactionCvv2;

    /**
     * @var string
     */
    #[ORM\Column(name: 'transaction_msgs', type: 'string', length: 255, nullable: false)]
    private $transactionMsgs;

    public function getOrdersStatusHistoryId(): ?int
    {
        return $this->ordersStatusHistoryId;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    public function setTransactionType(string $transactionType): self
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function setPaymentType(string $paymentType): self
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): self
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getTransactionAmount(): ?string
    {
        return $this->transactionAmount;
    }

    public function setTransactionAmount(string $transactionAmount): self
    {
        $this->transactionAmount = $transactionAmount;

        return $this;
    }

    public function getModuleCode(): ?string
    {
        return $this->moduleCode;
    }

    public function setModuleCode(string $moduleCode): self
    {
        $this->moduleCode = $moduleCode;

        return $this;
    }

    public function getTransactionAvs(): ?string
    {
        return $this->transactionAvs;
    }

    public function setTransactionAvs(string $transactionAvs): self
    {
        $this->transactionAvs = $transactionAvs;

        return $this;
    }

    public function getTransactionCvv2(): ?string
    {
        return $this->transactionCvv2;
    }

    public function setTransactionCvv2(string $transactionCvv2): self
    {
        $this->transactionCvv2 = $transactionCvv2;

        return $this;
    }

    public function getTransactionMsgs(): ?string
    {
        return $this->transactionMsgs;
    }

    public function setTransactionMsgs(string $transactionMsgs): self
    {
        $this->transactionMsgs = $transactionMsgs;

        return $this;
    }


}
