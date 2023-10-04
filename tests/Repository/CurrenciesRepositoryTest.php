<?php
namespace App\Tests\Repository;

use App\Entity\Currencies;
use App\Repository\CurrenciesRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of CurrenciesRepositoryTest
 *
 * @author andrey
 */
class CurrenciesRepositoryTest extends KernelTestCase
{

    public function testGetCurrentCurrency()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->any())
            ->method('get')
            ->with('currency')
            ->willReturnOnConsecutiveCalls(null, '', 0, 'asdasd', 'USD', 'EUR', 'GBP', 'JPY', 'CAD', 'AUD');         
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->any())
            ->method('getSession')
            ->willReturn($session);  
        
        $container->set(RequestStack::class, $requestStack);
        
        $currenciesRepository = $container->get(CurrenciesRepository::class);
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('USD', $currency->getCode());
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('USD', $currency->getCode());

        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('USD', $currency->getCode());

        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('USD', $currency->getCode()); 
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('USD', $currency->getCode());         
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('EUR', $currency->getCode());     
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('GBP', $currency->getCode());         
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('JPY', $currency->getCode());   
        
        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('CAD', $currency->getCode()); 

        $currency = $currenciesRepository->getCurrentCurrency();
        $this->assertEquals('AUD', $currency->getCode());         
    }
 
}
