<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RmaReturnReasons
 */
#[ORM\Table(name: 'rma_return_reasons')]
#[ORM\Entity]
class RmaReturnReasons
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'return_reason_code', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $returnReasonCode;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'option_enabled', type: 'boolean', nullable: true, options: ['default' => 1])]
    private $optionEnabled = true;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'return_reason_desc', type: 'string', length: 128, nullable: true)]
    private $returnReasonDesc;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'instant_rma', type: 'boolean', nullable: true, options: ['default' => 1])]
    private $instantRma = true;

    public function getReturnReasonCode(): ?int
    {
        return $this->returnReasonCode;
    }

    public function getOptionEnabled(): ?bool
    {
        return $this->optionEnabled;
    }

    public function setOptionEnabled(?bool $optionEnabled): self
    {
        $this->optionEnabled = $optionEnabled;

        return $this;
    }

    public function getReturnReasonDesc(): ?string
    {
        return $this->returnReasonDesc;
    }

    public function setReturnReasonDesc(?string $returnReasonDesc): self
    {
        $this->returnReasonDesc = $returnReasonDesc;

        return $this;
    }

    public function getInstantRma(): ?bool
    {
        return $this->instantRma;
    }

    public function setInstantRma(?bool $instantRma): self
    {
        $this->instantRma = $instantRma;

        return $this;
    }


}
