<?php
namespace App\Tests\Repository;

use App\Repository\TaxRatesRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of TaxRatesRepositoryTest
 *
 * @author andrey
 */
class TaxRatesRepositoryTest extends KernelTestCase
{

    public function testGetTaxRateStore()
    {
        $kernel = self::bootKernel();
        
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
            ->method('has')
            ->with('customer_id')
            ->willReturn(false)
        ;
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->once())
            ->method('getSession')
            ->willReturn($session);        
        
        $kernel->getContainer()->set(RequestStack::class, $requestStack);
        
        $taxRatesRepository = $kernel->getContainer()->get(TaxRatesRepository::class);
        
        $this->assertEquals(6.625, round($taxRatesRepository->getTaxRate(1), 3));
    }
    
    public function testGetTaxRateCustomer()
    {
        $kernel = self::bootKernel();
        
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
            ->method('has')
            ->with('customer_id')
            ->willReturn(true)
        ;
        
        $session->expects($this->exactly(2))
            ->method('get')
            ->withConsecutive(
                ['customer_country_id'],
                ['customer_zone_id']
            )
            ->willReturnOnConsecutiveCalls(223, 41)
        ;

        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->once())
            ->method('getSession')
            ->willReturn($session);        
        
        $kernel->getContainer()->set(RequestStack::class, $requestStack);
        
        $taxRatesRepository = $kernel->getContainer()->get(TaxRatesRepository::class);
        
        $this->assertEquals(6.625, round($taxRatesRepository->getTaxRate(1), 3));
    } 
    
    public function testGetTaxRate()
    {
        $kernel = self::bootKernel();
        
        $session = $this->createMock(SessionInterface::class);
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->exactly(2))
            ->method('getSession')
            ->willReturn($session);        
        
        $kernel->getContainer()->set(RequestStack::class, $requestStack);
        
        $taxRatesRepository = $kernel->getContainer()->get(TaxRatesRepository::class);
        
        $this->assertEquals(6.625, round($taxRatesRepository->getTaxRate(1, 223, 41), 3));
        $this->assertEquals(0, round($taxRatesRepository->getTaxRate(1, 220, 3552), 3));
    }    
    
}
