<?php
namespace App\Service\Analytics;

use App\Lib\ExternalJS;
use App\Entity\CategoriesDescription;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class Remarketing extends ExternalJS 
{
    protected $requestStack;
    protected $entityManager;
    
    public function __construct(RequestStack $requestStack, ManagerRegistry $doctrine, CacheInterface $externalJsCache) 
    {
        $this->requestStack = $requestStack;
        $this->entityManager = $doctrine->getManager();
        
        $this->_server = 'www.googleadservices.com';
        $this->_path = '/pagead/conversion.js';
        $this->_cache_filename = 'remarketing.js';
        
        parent::__construct($externalJsCache);
    }
    
    public function generate(): array
    {
        $request = $this->requestStack->getCurrentRequest();
        $route = $request->get('_route');
        
        $remarketingParams = [
            'ecomm_prodid' => '',
            'ecomm_pagetype' => 'other',
            'ecomm_totalvalue' => '',
            'ecomm_category' => '',
        ];
        
        switch ($route) {
            case 'home':
                $remarketingParams['ecomm_pagetype'] = 'home';
                
                break;
            
            case 'categories':
                $categories = $this->entityManager->getRepository(CategoriesDescription::class)->getCategoriesByCategoriesUrl($request->get('categories_url'));

                $remarketingParams['ecomm_pagetype'] = 'category';
                $remarketingParams['ecomm_category'] = addslashes($categories->getCategoriesName());
                
                break;
            
            case 'advanced_search_result':
                
                break;
            
            case 'product_info':
                
                break;

            case 'shopping_cart':
                
                break; 
            
            case 'checkout_success':
                
                break;            
        }

        return $remarketingParams;
    }

}
