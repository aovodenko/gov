<?php
namespace App\Tests\Entity;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of ProductsTest
 *
 * @author andrey
 */
class ProductsTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }
    
    public function testGetProductsPrice()
    {
    /* Product final price without attributes */
        $product = $this->entityManager
            ->getRepository(Products::class)
            ->find(209);
        
        $product->setAttributes([]);
 
        $price = $product->getFinalPrice();
        
        $this->assertEquals(29.95, $price);
    /* End Product final price without attributes */    
        
    /* Product final price with attributes */
        $product = $this->entityManager
            ->getRepository(Products::class)
            ->find(1337);
        
        $product->setAttributes([
            1 => 45,
            11 => 42
        ]);
 
        $price = $product->getFinalPrice();
        
        $this->assertEquals(2390.95, $price);
    /* End Product final price with attributes */    
        
    /* Product original price with special price */
        $product = $this->entityManager
            ->getRepository(Products::class)
            ->find(3320);
        
        $product->setAttributes([]);
        
        $price = $product->getProductsPrice();
        
        $this->assertEquals(89.95, $price); 
    /* End Product original price with special price */
        
        
    /* Product final price with special price */
        $product = $this->entityManager
            ->getRepository(Products::class)
            ->find(3320);
        
        $product->setAttributes([]);
        
        $price = $product->getFinalPrice();
        
        $this->assertEquals(71.99, $price); 
    /* End Product final price with special price */

    }
    
    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }   
}
