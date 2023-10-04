<?php
namespace App\Repository;

use App\Entity\Customers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;


class CustomersRepository extends ServiceEntityRepository
{
    protected $customersCache;

    public function __construct(ManagerRegistry $registry, CacheInterface $customersCache)
    {
        parent::__construct($registry, Customers::class);

        $this->customersCache = $customersCache;
    }
    
    public function findById(int $customers_id)
    {
        return $this->customersCache->get($customers_id, function(ItemInterface $item){
          $value = $this->findOneBy(['customersId' => $item->getKey()]);

          return $value ?: false;
        });        
    }

}
