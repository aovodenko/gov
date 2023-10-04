<?php
namespace App\Repository;

use App\Entity\HeadertagsPages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class HeadertagsPagesRepository extends ServiceEntityRepository
{
    protected $headertagsPagesCache;

    public function __construct(ManagerRegistry $registry, CacheInterface $headertagsPagesCache)
    {
        parent::__construct($registry, HeadertagsPages::class);

        $this->headertagsPagesCache = $headertagsPagesCache;
    }
    
    public function findOneByCached(array $criteria, ?array $orderBy = null)
    {
        return $this->headertagsPagesCache->get(http_build_query($criteria), function(ItemInterface $item) use ($criteria) {
          $value = $this->findOneBy($criteria);

          return $value ?: false;
        });        
    }

}
