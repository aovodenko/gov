<?php
namespace App\Service\Analytics;

use Symfony\Component\HttpFoundation\RequestStack;

class Bing
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

        $bingParams = [
            'revenue' => '',
        ];

        switch ($route) {
            case 'checkout_success':
                $bingParams['revenue'] = 0;
                
                break;
        }

        return $bingParams;
    }

}
