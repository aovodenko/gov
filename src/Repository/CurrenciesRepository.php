<?php
namespace App\Repository;

use App\Entity\Currencies;
use App\Entity\Configuration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class CurrenciesRepository extends ServiceEntityRepository
{
    protected $requestStack;
    protected $cacheApp;

    public function __construct(ManagerRegistry $registry, RequestStack $requestStack, CacheInterface $cacheApp)
    {
        parent::__construct($registry, Currencies::class);

        $this->requestStack = $requestStack;
        $this->cacheApp = $cacheApp;
    }

    public function getCurrentCurrency()
    {
      $currency_code = $this->requestStack->getSession()->get('currency') ?: 'USD';

      $currency = $this->cacheApp->get('currency_' . $currency_code, function(ItemInterface $item) use ($currency_code){
        return $this->findOneBy([
          'code' => $currency_code
        ]);
      });

      if(!$currency){
        $currency_code = 'USD';

        $currency = $this->cacheApp->get('currency_' . $currency_code, function(ItemInterface $item) use ($currency_code){
          return $this->findOneBy([
            'code' => $currency_code
          ]);
        });
      }

      return $currency;
    }

}
