<?php
namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use App\Service\CountryDetector;

class ResponseListener
{
    public function __construct(CountryDetector $countryDetector) {
        $this->countryDetector = $countryDetector;
    }
    
    public function onKernelResponse(ResponseEvent $event)
    {
        $request = $event->getRequest();
        
        if(!$request->cookies->has('country_code')){
            $response = $event->getResponse();

            $response->headers->setCookie(Cookie::create('country_code')
                ->withValue($this->countryDetector->getCountryCode())
                ->withExpires(time()+60*60*24*365)
                ->withDomain($request->server->get('SERVER_NAME'))
                ->withPath($_ENV['DIR_WS_CATALOG'])
                ->withSecure(true)
            );
        }
    }
}
