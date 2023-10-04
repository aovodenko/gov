<?php
namespace App\Tests\Service;

use App\Service\ShippingBanner;
use App\Service\CountryDetector;
use App\Repository\ConfigurationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of ShippingBannerTest
 *
 * @author andrey
 */
class ShippingBannerTest extends KernelTestCase
{

    public function testGenerateUsFree()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $repository = $this->createMock(ConfigurationRepository::class);

        $repository->expects($this->exactly(2))
            ->method('getConfigParam')
            ->withConsecutive(
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING'],
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER'],
            )
            ->willReturnOnConsecutiveCalls('true', '1');
        
        $countryDetector = $this->createMock(CountryDetector::class);
        $countryDetector->expects($this->once())
            ->method('getCountryCode')
            ->willReturn('US');
        
        $container->set(ConfigurationRepository::class, $repository);
        $container->set(CountryDetector::class, $countryDetector);
        
        $shippingBanner = $container->get(ShippingBanner::class);
        
        $data = $shippingBanner->generate();
        $this->assertEquals('FREE U.S. SHIPPING - ALL ORDERS', $data['title']);
    }

    public function testGenerateUsNotFree()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $repository = $this->createMock(ConfigurationRepository::class);

        $repository->expects($this->exactly(2))
            ->method('getConfigParam')
            ->withConsecutive(
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING'],
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER'],
            )
            ->willReturnOnConsecutiveCalls('false', '1');
        
        $countryDetector = $this->createMock(CountryDetector::class);
        $countryDetector->expects($this->once())
            ->method('getCountryCode')
            ->willReturn('US');
        
        $container->set(ConfigurationRepository::class, $repository);
        $container->set(CountryDetector::class, $countryDetector);
        
        $shippingBanner = $container->get(ShippingBanner::class);
        
        $data = $shippingBanner->generate();
        $this->assertEquals('FREE U.S. SHIPPING OVER ', $data['title']);
    }

    public function testGenerateAU()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $repository = $this->createMock(ConfigurationRepository::class);

        $repository->expects($this->exactly(2))
            ->method('getConfigParam')
            ->withConsecutive(
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING'],
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER'],
            )
            ->willReturnOnConsecutiveCalls('true', '1');
        
        $countryDetector = $this->createMock(CountryDetector::class);
        $countryDetector->expects($this->once())
            ->method('getCountryCode')
            ->willReturn('AU');
        
        $container->set(ConfigurationRepository::class, $repository);
        $container->set(CountryDetector::class, $countryDetector);
        
        $shippingBanner = $container->get(ShippingBanner::class);
        
        $data = $shippingBanner->generate();
        $this->assertEquals('Shipping to Australia starts at AU$ 10.87', $data['title']);
    }  
    
    public function testGenerateDE()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $repository = $this->createMock(ConfigurationRepository::class);

        $repository->expects($this->exactly(2))
            ->method('getConfigParam')
            ->withConsecutive(
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING'],
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER'],
            )
            ->willReturnOnConsecutiveCalls('true', '1');
        
        $countryDetector = $this->createMock(CountryDetector::class);
        $countryDetector->expects($this->once())
            ->method('getCountryCode')
            ->willReturn('DE');
        
        $container->set(ConfigurationRepository::class, $repository);
        $container->set(CountryDetector::class, $countryDetector);
        
        $shippingBanner = $container->get(ShippingBanner::class);
        
        $data = $shippingBanner->generate();
        $this->assertEquals('Shipping to Germany starts at &euro; 7.56', $data['title']);
    }    
    
    public function testGenerateUA()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $repository = $this->createMock(ConfigurationRepository::class);

        $repository->expects($this->exactly(2))
            ->method('getConfigParam')
            ->withConsecutive(
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING'],
                ['MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER'],
            )
            ->willReturnOnConsecutiveCalls('true', '1');
        
        $countryDetector = $this->createMock(CountryDetector::class);
        $countryDetector->expects($this->once())
            ->method('getCountryCode')
            ->willReturn('UA');
        
        $container->set(ConfigurationRepository::class, $repository);
        $container->set(CountryDetector::class, $countryDetector);
        
        $shippingBanner = $container->get(ShippingBanner::class);
        
        $data = $shippingBanner->generate();
        $this->assertEquals('International shipping starts at $ 7.20', $data['title']);
    }    
    
}
