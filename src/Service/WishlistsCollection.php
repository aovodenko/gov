<?php
namespace App\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\RequestStack;

class WishlistsCollection
{
    protected $requestStack;
    protected $wishlistsCollection;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;

        $this->wishlistsCollection = new ArrayCollection();
    }

    public function setWishlistsCollection(): self
    {
        $session = $this->requestStack->getSession();

        if($wishlistsCollection = $session->get('wishlistsCollection')){
          $this->wishlistsCollection = $wishlistsCollection;
        }

        return $this;
    }

    public function getWishlistsCollection(): ?Collection
    {
      return $this->wishlistsCollection;
    }

    public function inWishlists(int $wishlists_id): bool
    {
      foreach($this->wishlistsCollection as $wishlists)  
      {
          if($wishlists->getWishlistsId() == $wishlists_id)
          {
              return true;
          }
      }
        
      return false;
    }

}
