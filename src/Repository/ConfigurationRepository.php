<?php
namespace App\Repository;

use App\Entity\Configuration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class ConfigurationRepository extends ServiceEntityRepository
{
    protected $configParamsCache;

    public function __construct(ManagerRegistry $registry, CacheInterface $configParamsCache)
    {
        parent::__construct($registry, Configuration::class);

        $this->configParamsCache = $configParamsCache;
    }

    public function getConfigParam(string $key)
    {
        return $this->configParamsCache->get($key, function(ItemInterface $item){
          $value = $this->findOneBy(['configurationKey' => $item->getKey()]);

          return $value->getConfigurationValue() ?: false;
        });
    }
}
