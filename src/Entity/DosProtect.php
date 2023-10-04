<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DosProtect
 */
#[ORM\Table(name: 'dos_protect')]
#[ORM\Entity]
class DosProtect
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(name: 'request', type: 'string', length: 256, nullable: false)]
    private $request;

    /**
     * @var string
     */
    #[ORM\Column(name: 'method', type: 'string', length: 16, nullable: false)]
    private $method;

    /**
     * @var string
     */
    #[ORM\Column(name: 'ip_address', type: 'string', length: 16, nullable: false)]
    private $ipAddress;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $dateAdded = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequest(): ?string
    {
        return $this->request;
    }

    public function setRequest(string $request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }


}
