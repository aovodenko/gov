<?php
namespace App\Tests\Service;

use App\Service\CurrencySelector;
use App\Service\CountryDetector;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of CurrencySelectorTest
 *
 * @author andrey
 */
class CurrencySelectorTest extends KernelTestCase
{

    public function testGenerate()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->exactly(9))
            ->method('get')
            ->with('currency_selected')
            ->willReturnOnConsecutiveCalls(
                'USD', 
                'EUR', 
                'EUR', 
                'EUR', 
                'GBP', 
                'CAD', 
                'AUD', 
                'JPY',
                'GRN'
            );
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->exactly(9))
            ->method('getSession')
            ->willReturn($session); 
        
        $countryDetector = $this->createMock(CountryDetector::class);
        $countryDetector->expects($this->exactly(9))
            ->method('getCountryCode')
            ->willReturnOnConsecutiveCalls(
                'US', 
                'FR', 
                'DE',
                'IT',
                'GB', 
                'CA', 
                'AU', 
                'JP',
                'UA'
            );
        
        $container->set(RequestStack::class, $requestStack);
        $container->set(CountryDetector::class, $countryDetector);
        
        $currencySelector = $container->get(CurrencySelector::class);
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('FREE SHIPPING', $currency_selector['title_1']);
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('Shipping to France', $currency_selector['title_1']);
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('Shipping to Germany', $currency_selector['title_1']); 
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('Shipping to Italy', $currency_selector['title_1']); 
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('Shipping to the UK', $currency_selector['title_1']); 
                
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('Shipping to Canada', $currency_selector['title_1']); 
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('Shipping to Australia', $currency_selector['title_1']);  
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('SHIPPPING TO JAPAN', $currency_selector['title_1']);  
        
        $currency_selector = $currencySelector->generate();
        $this->assertEquals('International shipping', $currency_selector['title_1']);        
    }
 
}
