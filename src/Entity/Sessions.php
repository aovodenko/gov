<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 */
#[ORM\Table(name: 'sessions')]
#[ORM\Entity]
class Sessions
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'sesskey', type: 'string', length: 32, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $sesskey;

    /**
     * @var int
     */
    #[ORM\Column(name: 'expiry', type: 'integer', nullable: false, options: ['unsigned' => true])]
    private $expiry = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'value', type: 'text', length: 65535, nullable: false)]
    private $value;

    public function getSesskey(): ?string
    {
        return $this->sesskey;
    }

    public function getExpiry(): ?int
    {
        return $this->expiry;
    }

    public function setExpiry(int $expiry): self
    {
        $this->expiry = $expiry;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
