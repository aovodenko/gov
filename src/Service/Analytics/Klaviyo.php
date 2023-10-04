<?php

namespace App\Service\Analytics;

use App\Lib\ExternalJS;
use App\Entity\Customers;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class Klaviyo extends ExternalJS {

    protected $requestStack;
    protected $entityManager;

    public function __construct(RequestStack $requestStack, ManagerRegistry $doctrine, CacheInterface $externalJsCache) {
        $this->requestStack = $requestStack;
        $this->entityManager = $doctrine->getManager();

        $this->_server = 'static.klaviyo.com';
        $this->_path = '/onsite/js/klaviyo.js?company_id=MzCxB3';
        $this->_cache_filename = 'klaviyo.js';

        parent::__construct($externalJsCache);
    }

    public function generate(): array {
        $request = $this->requestStack->getCurrentRequest();
        $route = $request->get('_route');

        $session = $this->requestStack->getSession();
        $customer_id = $session->get('customer_id');

        $klaviyoParams = [
            'identifyParams' => [
                'email' => '',
                'first_name' => '',
                'last_name' => '',
            ],
        ];

        if($customer_id) {
            $customers = $this->entityManager->getRepository(Customers::class)->findById($customer_id);
            
            if($customers)
            {
                $klaviyoParams['identifyParams'] = [
                    'email' => $customers->getCustomersEmailAddress(),
                    'first_name' => $customers->getCustomersFirstname(),
                    'last_name' => $customers->getCustomersLastname(),
                ];
            }            
                
            if($customer_email_address = $session->get('customer_email_address'))
            {
                $klaviyoParams['identifyParams']['email'] = $customer_email_address;
            }
            
            switch($route) {
                case 'product_info':

                    break;

                case 'product_details_popup':

                    break;

                case 'checkout':

                    break;
            }
        }

        return $klaviyoParams;
    }

}
