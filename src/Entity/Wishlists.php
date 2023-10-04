<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlists
 */
#[ORM\Table(name: 'wishlists')]
#[ORM\Entity(repositoryClass: 'App\Repository\WishlistsRepository')]
class Wishlists
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'wishlists_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $wishlistsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'wishlists_label', type: 'string', length: 256, nullable: false)]
    private $wishlistsLabel;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: true)]
    private $customersId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'session_id', type: 'string', length: 256, nullable: true)]
    private $sessionId;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false)]
    private $dateAdded;

    public function setWishlistsId(int $wishlistsId): self
    {
        $this->wishlistsId = $wishlistsId;
        
        return $this;
    }

    public function getWishlistsId(): ?int
    {
        return $this->wishlistsId;
    }

    public function getWishlistsLabel(): ?string
    {
        return $this->wishlistsLabel;
    }

    public function setWishlistsLabel(string $wishlistsLabel): self
    {
        $this->wishlistsLabel = $wishlistsLabel;

        return $this;
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function setCustomersId(?int $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(?string $sessionId): self
    {
        $this->sessionId = $sessionId;

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
