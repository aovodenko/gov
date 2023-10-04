<?php
namespace App\Tests\Service;

use App\Service\CategoriesLevels;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of CategoriesLevelsTest
 *
 * @author andrey
 */
class CategoriesLevelsTest extends KernelTestCase
{
    private $categoriesLevels;
    
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        
        $this->categoriesLevels = $kernel->getContainer()->get(CategoriesLevels::class);
    }
    
    
    public function testGetCategoriesLevels()
    {
        $this->categoriesLevels->setCategoriesLevels();
        
        $categoriesLevels = $this->categoriesLevels->getCategoriesLevels();
        
        $this->assertEquals('JEWELRY & WATCHES', $categoriesLevels[0][0][204]);
        $this->assertEquals('SCULPTURES & FIGURINES', $categoriesLevels[1][153]['153_219']);        
        $this->assertEquals('Wine Glass Charms', $categoriesLevels[2]['227_229']['227_229_147']);        
    }
    
    protected function tearDown(): void
    {
        parent::tearDown();
    }    
 
}
