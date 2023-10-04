<?php
namespace App\Tests\Service;

use App\Service\CustomersBasketCollection;
use App\Entity\CustomersBasket;
use App\Entity\CustomersBasketAttributes;
use App\Entity\Products;
use App\Entity\GiftwrapOptions;
use App\Entity\ProductsOptions;
use App\Entity\ProductsOptionsValues;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of CustomersBasketCollectionTest
 *
 * @author andrey
 */
class CustomersBasketCollectionTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;
    private $customersBasketCollection;
    
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        
        $container = $kernel->getContainer();

        $this->entityManager = $container
            ->get('doctrine')
            ->getManager();
        
        $customersBasketCollection = new ArrayCollection;

//Add Products #1056 to Customer Basket
        $customersBasket = new CustomersBasket();
        
        $product = $this->entityManager->getRepository(Products::class)->find(1056);
        
        $attributes = [];
        $customersBasketAttributesArray = [];
        $attributes_price = 0;        
        
        $attributes[10] = 35;
        $attributes[9] = 37;
        $product->setAttributes($attributes);
        $attributes_price = $product->getProductsAttributesPrice();
        $product->setProductsAttributesPrice($attributes_price);
        
        $customersBasket->setGiftwrapId(2);
        $giftwrap = $this->entityManager->getRepository(GiftwrapOptions::class)->find(2);
        $customersBasket->setGiftwrap($giftwrap);

        $customersBasket->setCustomersBasketQuantity(2);
        
        $customersBasketAttributesArray[10] = new CustomersBasketAttributes();
        $productsOptions = $this->entityManager->getRepository(ProductsOptions::class)->find(10);
        $productsOptionsValues = $this->entityManager->getRepository(ProductsOptionsValues::class)->find(35);
        $customersBasketAttributesArray[10]
            ->setProductsId(1056)
            ->setProductsOptionsId(10)
            ->setProductsOptionsValueId(35)
            ->setProductsOptions($productsOptions)
            ->setProductsOptionsValue($productsOptionsValues)
        ;
        $customersBasket->addCustomersBasketAttribute($customersBasketAttributesArray[10]);   
        
        $customersBasketAttributesArray[9] = new CustomersBasketAttributes();
        $productsOptions = $this->entityManager->getRepository(ProductsOptions::class)->find(9);
        $productsOptionsValues = $this->entityManager->getRepository(ProductsOptionsValues::class)->find(37);
        $customersBasketAttributesArray[9]
            ->setProductsId(1056)
            ->setProductsOptionsId(9)
            ->setProductsOptionsValueId(37)
            ->setProductsOptions($productsOptions)
            ->setProductsOptionsValue($productsOptionsValues)
        ;
        $customersBasket->addCustomersBasketAttribute($customersBasketAttributesArray[9]);           
        
        $customersBasket->setFinalPrice($product->getFinalPrice());
        
        $customersBasket->setProductsId(1056)
            ->setProducts($product)
        ;

        $customersBasketCollection->add($customersBasket);
//End Products #1056 to Customer Basket   
        
//Add Products #1439 to Customer Basket
        $customersBasket = new CustomersBasket();
        
        $product = $this->entityManager->getRepository(Products::class)->find(1439);
        
        $attributes = [];
        $customersBasketAttributesArray = [];
        $attributes_price = 0;        
        
        $product->setAttributes($attributes);
        $attributes_price = $product->getProductsAttributesPrice();
        $product->setProductsAttributesPrice($attributes_price);
        
        $customersBasket->setGiftwrapId(2);
        $giftwrap = $this->entityManager->getRepository(GiftwrapOptions::class)->find(2);
        $customersBasket->setGiftwrap($giftwrap);

        $customersBasket->setCustomersBasketQuantity(1);
        
        $customersBasket->setFinalPrice($product->getFinalPrice());
        
        $customersBasket->setProductsId(1439)
            ->setProducts($product)
        ;

        $customersBasketCollection->add($customersBasket);
//End Products #1439 to Customer Basket 
        
//Add Products #1335 to Customer Basket
        $customersBasket = new CustomersBasket();
        
        $product = $this->entityManager->getRepository(Products::class)->find(1335);
        
        $attributes = [];
        $customersBasketAttributesArray = [];
        $attributes_price = 0;        
        
        $attributes[1] = 50;
        $attributes[11] = 42;
        $product->setAttributes($attributes);
        $attributes_price = $product->getProductsAttributesPrice();
        $product->setProductsAttributesPrice($attributes_price);
        
        $customersBasket->setGiftwrapId(0);
        $giftwrap = $this->entityManager->getRepository(GiftwrapOptions::class)->find(0);
        $customersBasket->setGiftwrap($giftwrap);

        $customersBasket->setCustomersBasketQuantity(1);
        
        $customersBasketAttributesArray[1] = new CustomersBasketAttributes();
        $productsOptions = $this->entityManager->getRepository(ProductsOptions::class)->find(1);
        $productsOptionsValues = $this->entityManager->getRepository(ProductsOptionsValues::class)->find(50);
        $customersBasketAttributesArray[1]
            ->setProductsId(1335)
            ->setProductsOptionsId(1)
            ->setProductsOptionsValueId(50)
            ->setProductsOptions($productsOptions)
            ->setProductsOptionsValue($productsOptionsValues)
        ;
        $customersBasket->addCustomersBasketAttribute($customersBasketAttributesArray[1]);   
        
        $customersBasketAttributesArray[11] = new CustomersBasketAttributes();
        $productsOptions = $this->entityManager->getRepository(ProductsOptions::class)->find(11);
        $productsOptionsValues = $this->entityManager->getRepository(ProductsOptionsValues::class)->find(42);
        $customersBasketAttributesArray[11]
            ->setProductsId(1335)
            ->setProductsOptionsId(11)
            ->setProductsOptionsValueId(42)
            ->setProductsOptions($productsOptions)
            ->setProductsOptionsValue($productsOptionsValues)
        ;
        $customersBasket->addCustomersBasketAttribute($customersBasketAttributesArray[11]);           
        
        $customersBasket->setFinalPrice($product->getFinalPrice());
        
        $customersBasket->setProductsId(1335)
            ->setProducts($product)
        ;

        $customersBasketCollection->add($customersBasket);
//End Products #1335 to Customer Basket

        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
            ->method('get')
            ->with('customersBasketCollection')
            ->willReturn($customersBasketCollection);
        
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->once())
            ->method('getSession')
            ->willReturn($session);
        
        $container->set(RequestStack::class, $requestStack);
        
        $this->customersBasketCollection = $container->get(CustomersBasketCollection::class);
        $this->customersBasketCollection->setCustomersBasketCollection();
    }
    
    public function testGetQuantity()
    {
        $this->assertEquals(2, $this->customersBasketCollection->getQuantity(1056));
        $this->assertEquals(1, $this->customersBasketCollection->getQuantity(1439));
        $this->assertEquals(1, $this->customersBasketCollection->getQuantity(1335));
    }
    
    public function testCountContents()
    {
        $this->assertEquals(4, $this->customersBasketCollection->countContents());
    }    
    
    public function testGetTotal()
    {
        $this->assertEquals(1958.80, $this->customersBasketCollection->getTotal());
    } 

    public function testGetWeight()
    {
        $this->assertEquals(20.2, $this->customersBasketCollection->getWeight());
    }   
    
    public function testGetGiftwrapSelected()
    {
        $this->assertEquals(true, $this->customersBasketCollection->getGiftwrapSelected());
    } 

    public function testGetGiftwrapTotal()
    {
        $this->assertEquals(5.85, $this->customersBasketCollection->getGiftwrapTotal());
    }     
    
    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }    
 
}
