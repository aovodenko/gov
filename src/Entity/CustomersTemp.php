<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomersTemp
 */
#[ORM\Table(name: 'customers_temp')]
#[ORM\Entity]
class CustomersTemp
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $customersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_firstname', type: 'string', length: 32, nullable: false)]
    private $customersFirstname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_lastname', type: 'string', length: 32, nullable: false)]
    private $customersLastname;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_email_address', type: 'string', length: 96, nullable: false)]
    private $customersEmailAddress;

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function getCustomersFirstname(): ?string
    {
        return $this->customersFirstname;
    }

    public function setCustomersFirstname(string $customersFirstname): self
    {
        $this->customersFirstname = $customersFirstname;

        return $this;
    }

    public function getCustomersLastname(): ?string
    {
        return $this->customersLastname;
    }

    public function setCustomersLastname(string $customersLastname): self
    {
        $this->customersLastname = $customersLastname;

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


}
