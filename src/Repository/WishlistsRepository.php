<?php
namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Entity\Wishlists;

class WishlistsRepository extends ServiceEntityRepository
{
    protected $requestStack;
    protected $entityManager;

    protected $wishlists = null;

    public function __construct(ManagerRegistry $registry, RequestStack $requestStack)
    {
        parent::__construct($registry, Wishlists::class);

        $this->entityManager = $registry->getManager();
        $this->requestStack = $requestStack;
    }

}
