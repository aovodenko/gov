<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;

class CountryDetector
{
    protected $requestStack;
    protected $reader;
    protected $logger;
    protected $country_code = '';

    public function __construct(RequestStack $requestStack, Reader $reader) 
    {
        $this->requestStack = $requestStack;

        $this->reader = $reader;
    }

    public function getCountryCode() 
    {
        $request = $this->requestStack->getCurrentRequest();
        
        $remote_addr = $request->server->get('REMOTE_ADDR');

        if($remote_addr && in_array($remote_addr, [
            '127.0.0.1',
            '178.178.85.94',
            '173.3.70.218',
            '178.151.223.116',
            '50.29.101.5'
        ])){
            $this->country_code = 'US';
        }
        else{
            $this->country_code = $request->cookies->has('country_code') ? $request->cookies->get('country_code') : '';
        }

        if(empty($this->country_code)){
            try {
                if(!$remote_addr){
                    throw new Exception('REMOTE_ADDR is not set.');
                }

                $record = $this->reader->country($remote_addr);

                if(!isset($record->country->isoCode) || empty($record->country->isoCode)){
                    throw new Exception('Country not defined.');
                }

                $this->country_code = $record->country->isoCode;
            }
            catch(AddressNotFoundException $e){
                $this->country_code = 'US';
            }
            catch(Exception $e){
                $this->country_code = 'US';
            }
        }

        if(empty($this->country_code)){
            $this->country_code = 'US';
        }

        return $this->country_code;
    }
    
}
