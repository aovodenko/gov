<?php
namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Entity\CustomersBasket;

class CustomersBasketRepository extends ServiceEntityRepository
{
    protected $requestStack;
    protected $entityManager;

    public function __construct(ManagerRegistry $registry, RequestStack $requestStack)
    {
        parent::__construct($registry, CustomersBasket::class);

        $this->entityManager = $registry->getManager();
        $this->requestStack = $requestStack;
    }

}
