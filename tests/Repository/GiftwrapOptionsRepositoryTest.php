<?php
namespace App\Tests\Repository;

use App\Repository\GiftwrapOptionsRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of GiftwrapOptionsRepositoryTest
 *
 * @author andrey
 */
class GiftwrapOptionsRepositoryTest extends KernelTestCase
{
    private $giftwrapOptionsRepository;
    
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        
        $this->giftwrapOptionsRepository = $kernel->getContainer()->get(GiftwrapOptionsRepository::class);
    }
    
    
    public function testGetGiftwrapOptionsCollection()
    {
        $giftwrapOptionsCollection = $this->giftwrapOptionsRepository->getGiftwrapOptionsCollection();
                
        $this->assertEquals(0.00, $giftwrapOptionsCollection[1]);
        $this->assertEquals(1.95, $giftwrapOptionsCollection[2]);
        $this->assertEquals(3.95, $giftwrapOptionsCollection[3]);
        $this->assertEquals(6.95, $giftwrapOptionsCollection[4]);
    }
    
    protected function tearDown(): void
    {
        parent::tearDown();
    }    
 
}
