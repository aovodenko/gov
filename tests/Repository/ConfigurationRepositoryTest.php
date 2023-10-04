<?php
namespace App\Tests\Repository;

use App\Repository\ConfigurationRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
/**
 * Description of ConfigurationRepositoryTest
 *
 * @author andrey
 */
class ConfigurationRepositoryTest extends KernelTestCase
{
    private $configurationRepository;
    
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        
        $this->configurationRepository = $kernel->getContainer()->get(ConfigurationRepository::class);
    }
    
    
    public function testGetConfigParam()
    {
        $this->assertEquals('Glass Of Venice', $this->configurationRepository->getConfigParam('STORE_NAME'));
        $this->assertEquals('support@glassofvenice.com', $this->configurationRepository->getConfigParam('STORE_OWNER_EMAIL_ADDRESS'));        
        $this->assertEquals('GlassOfVenice <info@glassofvenice.com>', $this->configurationRepository->getConfigParam('EMAIL_FROM'));        
    }
    
    protected function tearDown(): void
    {
        parent::tearDown();
    }    
 
}
