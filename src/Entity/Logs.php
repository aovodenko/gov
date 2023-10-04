<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 */
#[ORM\Table(name: 'logs')]
#[ORM\Entity]
class Logs
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
    #[ORM\Column(name: 'request_uri', type: 'string', length: 255, nullable: false)]
    private $requestUri;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'remote_addr', type: 'string', length: 255, nullable: true)]
    private $remoteAddr;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'user_agent', type: 'string', length: 255, nullable: true)]
    private $userAgent;

    /**
     * @var string
     */
    #[ORM\Column(name: 'error', type: 'string', length: 255, nullable: false)]
    private $error;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false)]
    private $dateAdded;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequestUri(): ?string
    {
        return $this->requestUri;
    }

    public function setRequestUri(string $requestUri): self
    {
        $this->requestUri = $requestUri;

        return $this;
    }

    public function getRemoteAddr(): ?string
    {
        return $this->remoteAddr;
    }

    public function setRemoteAddr(?string $remoteAddr): self
    {
        $this->remoteAddr = $remoteAddr;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }


}
