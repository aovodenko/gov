<?php
namespace App\Repository;

use App\Entity\CategoriesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class CategoriesDescriptionRepository extends ServiceEntityRepository
{
    protected $categoriesCache;

    public function __construct(ManagerRegistry $registry, CacheInterface $categoriesCache)
    {
        parent::__construct($registry, CategoriesDescription::class);
        
        $this->categoriesCache = $categoriesCache;
    }

    public function getCategoriesByCategoriesUrl(string $categoriesUrl)
    {
        $categories_url_array = explode('/', $categoriesUrl);
        
        return $this->categoriesCache->get(end($categories_url_array), function (ItemInterface $item) 
        {
            if($categories =  $this->findOneBy([
                'categoriesUrl' => $item->getKey()
            ]))
            {
                return $categories;
            }
            
            return false;
        });
    }
}
