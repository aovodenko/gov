<?php
namespace App\Repository;

use App\Entity\HeadertagsDefault;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class HeadertagsDefaultRepository extends ServiceEntityRepository
{
    protected $headertagsDefaultCache;

    public function __construct(ManagerRegistry $registry, CacheInterface $headertagsDefaultCache)
    {
        parent::__construct($registry, HeadertagsDefault::class);

        $this->headertagsDefaultCache = $headertagsDefaultCache;
    }
    
    public function findOneByCached(array $criteria, ?array $orderBy = null)
    {
        return $this->headertagsDefaultCache->get(http_build_query($criteria), function(ItemInterface $item) use ($criteria) {
          $value = $this->findOneBy($criteria);

          return $value ?: false;
        });        
    }

}
