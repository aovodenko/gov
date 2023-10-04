<?php
namespace App\Service\Analytics;

use App\Lib\ExternalJS;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class NSG extends ExternalJS 
{
    protected $requestStack;
    
    public function __construct(RequestStack $requestStack, CacheInterface $externalJsCache) 
    {
        $this->requestStack = $requestStack;
        
        $this->_server = 'guarantee-cdn.com';
        $this->_path = '/Web/Seal/gjs.aspx?SN=960460146';
        $this->_cache_filename = 'nsg.js';
        
        parent::__construct($externalJsCache);
    }
    
    public function generate(): array
    {
        $request = $this->requestStack->getCurrentRequest();
        $route = $request->get('_route');

        $nsgParams = [
            'order' => '',
            'subtotal' => '',
            'currency' => '',
            'email' => '',
        ];
        
        switch ($route) {
            case 'checkout_success':
                $nsgParams['order'] = 0;
                $nsgParams['subtotal'] = 0;
                $nsgParams['currency'] = '';
                $nsgParams['email'] = '';
                
                break;
        }
        
        return $nsgParams;
    }    

}
