<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomersBasketInfo
 */
#[ORM\Table(name: 'customers_basket_info')]
#[ORM\Entity]
class CustomersBasketInfo
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'currencies_code', type: 'string', length: 5, nullable: true, options: ['default' => 'USD'])]
    private $currenciesCode = 'USD';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gift_msg', type: 'text', length: 65535, nullable: true)]
    private $giftMsg;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'comments', type: 'text', length: 65535, nullable: true)]
    private $comments;

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function getCurrenciesCode(): ?string
    {
        return $this->currenciesCode;
    }

    public function setCurrenciesCode(?string $currenciesCode): self
    {
        $this->currenciesCode = $currenciesCode;

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

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }


}
