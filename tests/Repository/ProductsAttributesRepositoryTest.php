<?php
namespace App\Tests\Repository;

use App\Repository\ProductsAttributesRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of ProductsAttributesRepositoryTest
 *
 * @author andrey
 */
class ProductsAttributesRepositoryTest extends KernelTestCase
{
    private $productsAttributesRepository;
    
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        
        $this->productsAttributesRepository = $kernel->getContainer()->get(ProductsAttributesRepository::class);
    }
    
    
    public function testGetProductsAttributesPrice()
    {
        $this->assertEquals(0, $this->productsAttributesRepository->getProductsAttributesPrice(1439, []));
        $this->assertEquals(0, $this->productsAttributesRepository->getProductsAttributesPrice(1056, [10 => 35, 9 => 39]));
        $this->assertEquals(839, $this->productsAttributesRepository->getProductsAttributesPrice(1335, [1 => 50, 11 => 42]));
    }
    
    protected function tearDown(): void
    {
        parent::tearDown();
    }    
 
}
