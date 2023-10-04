<?php
namespace App\Repository;

use App\Entity\GiftwrapOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Doctrine\Common\Collections\Criteria;

class GiftwrapOptionsRepository extends ServiceEntityRepository
{
    protected $cacheApp;

    public function __construct(ManagerRegistry $registry, CacheInterface $cacheApp)
    {
        parent::__construct($registry, GiftwrapOptions::class);

        $this->cacheApp = $cacheApp;
    }

    public function getGiftwrapOptionsCollection()
    {
        return $this->cacheApp->get('giftwrap_options_collection', function(ItemInterface $item){
          $giftwrap_options_collection = [];

          $criteria = new Criteria();
          $criteria->where(Criteria::expr()->gt('giftwrapId', 0));

          $giftwraps = $this->matching($criteria);

          foreach($giftwraps as $giftwrap){
            $giftwrap_options_collection[$giftwrap->getGiftwrapId()] = $giftwrap->getGiftwrapPrice();
          }

          return $giftwrap_options_collection;
        });
    }
}
