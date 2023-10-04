<?php
namespace App\Service\Analytics;

use Symfony\Component\HttpFoundation\RequestStack;

class Outbrain
{
    protected $requestStack;
    
    public function __construct(RequestStack $requestStack) 
    {
        $this->requestStack = $requestStack;
    }
    
    public function generate(): array
    {
        $request = $this->requestStack->getCurrentRequest();
        $route = $request->get('_route');

        $outbrainParams = [
            'orderValue' => '',
            'currency' => '',
            'orderId' => '',
        ];
        
        switch ($route) {
            case 'checkout_success':
                $outbrainParams['orderValue'] = 0;
                $outbrainParams['currency'] = '';
                $outbrainParams['orderId'] = '';
                
                break;
        }
        
        return $outbrainParams;
    }    

}
