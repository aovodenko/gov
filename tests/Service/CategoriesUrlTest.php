<?php
namespace App\Tests\Service;

use App\Service\CategoriesUrl;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of CategoriesUrlTest
 *
 * @author andrey
 */
class CategoriesUrlTest extends KernelTestCase
{
    private $categoriesUrl;
    
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        
        $this->categoriesUrl = $kernel->getContainer()->get(CategoriesUrl::class);
    }
    
    
    public function testGenerate()
    {
        $this->assertEquals('murano-glass-jewelry', $this->categoriesUrl->generate('204'));
        $this->assertEquals('murano-glass-jewelry/murano-pendants', $this->categoriesUrl->generate('204_52'));        
        $this->assertEquals('murano-glass-jewelry/millefiori/millefiori-necklaces', $this->categoriesUrl->generate('204_206_208'));        
    }
    
    protected function tearDown(): void
    {
        parent::tearDown();
    }    
 
}
