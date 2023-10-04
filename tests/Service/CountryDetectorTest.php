<?php
namespace App\Tests\Service;

use App\Service\CountryDetector;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ServerBag;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of CountryDetectorTest
 *
 * @author andrey
 */
class CountryDetectorTest extends KernelTestCase
{

    public function testGetCountryCodePredifened()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $server = $this->createMock(ServerBag::class);
        $server->expects($this->exactly(5))
            ->method('get')
            ->with('REMOTE_ADDR')
            ->willReturnOnConsecutiveCalls(
                '127.0.0.1', 
                '178.178.85.94', 
                '173.3.70.218', 
                '178.151.223.116', 
                '50.29.101.5'
            );
        
        $cookies = $this->createMock(ParameterBag::class);
        $cookies->expects($this->never())
            ->method('has')
            ->with('country_code')
            ->willReturn(false);         
        
        $cookies->expects($this->never())
            ->method('get')
            ->with('country_code')
            ->willReturn('');    
        
        $request = $this->createMock(Request::class);
        $request->server = $server;
        $request->cookies = $cookies;
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->exactly(5))
            ->method('getCurrentRequest')
            ->willReturn($request); 
        
        $reader = $this->createMock(Reader::class);
        $reader->expects($this->never())
            ->method('country');
        
        $container->set(RequestStack::class, $requestStack);
        $container->set(Reader::class, $reader);
        
        $countryDetector = $container->get(CountryDetector::class);

        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);   
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);  
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);         
    }
    
    public function testGetCountryCodeLiveWithCookie()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $server = $this->createMock(ServerBag::class);
        $server->expects($this->exactly(5))
            ->method('get')
            ->with('REMOTE_ADDR')
            ->willReturnOnConsecutiveCalls(
                '69.162.81.155', 
                '1.43.255.255', 
                '24.53.63.255', 
                '18.185.100.10', 
                '5.1.31.255'
            );
        
        $cookies = $this->createMock(ParameterBag::class);
        $cookies->expects($this->exactly(5))
            ->method('has')
            ->with('country_code')
            ->willReturn(true);
        
        $cookies->expects($this->exactly(5))
            ->method('get')
            ->with('country_code')
            ->willReturnOnConsecutiveCalls('US', 'AU', 'CA', 'DE', 'UA');    
        
        $request = $this->createMock(Request::class);
        $request->server = $server;
        $request->cookies = $cookies;
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->exactly(5))
            ->method('getCurrentRequest')
            ->willReturn($request); 
        
        $reader = $this->createMock(Reader::class);
        $reader->expects($this->never())
            ->method('country');        
        
        $container->set(RequestStack::class, $requestStack);
        $container->set(Reader::class, $reader);
        
        $countryDetector = $container->get(CountryDetector::class);

        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('AU', $countryCode);   
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('CA', $countryCode);  

        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('DE', $countryCode);
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('UA', $countryCode);         
    }

    public function testGetCountryCodeLiveWithoutCookie()
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        $server = $this->createMock(ServerBag::class);
        $server->expects($this->exactly(5))
            ->method('get')
            ->with('REMOTE_ADDR')
            ->willReturnOnConsecutiveCalls(
                '69.162.81.155', 
                '1.43.255.255', 
                '24.53.63.255', 
                '18.185.100.10', 
                '5.1.31.255'
            );
        
        $cookies = $this->createMock(ParameterBag::class);
        $cookies->expects($this->exactly(5))
            ->method('has')
            ->with('country_code')
            ->willReturn(false);
        
        $cookies->expects($this->never())
            ->method('get')
            ->with('country_code')
            ->willReturnOnConsecutiveCalls('US', 'AU', 'CA', 'DE', 'UA');    
        
        $request = $this->createMock(Request::class);
        $request->server = $server;
        $request->cookies = $cookies;
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->exactly(5))
            ->method('getCurrentRequest')
            ->willReturn($request); 
        
        $container->set(RequestStack::class, $requestStack);
        
        $countryDetector = $container->get(CountryDetector::class);

        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('US', $countryCode);
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('AU', $countryCode);   
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('CA', $countryCode);  

        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('DE', $countryCode); 
        
        $countryCode = $countryDetector->getCountryCode();
        $this->assertEquals('UA', $countryCode);         
    }    
 
}
