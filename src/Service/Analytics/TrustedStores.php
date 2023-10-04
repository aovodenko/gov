<?php
namespace App\Service\Analytics;

use App\Lib\ExternalJS;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class TrustedStores extends ExternalJS 
{
    public function __construct(CacheInterface $externalJsCache) 
    {
        $this->_server = 'apis.google.com';
        $this->_path = '/js/platform.js?onload=renderBadge';
        $this->_cache_filename = 'trusted_stores.js';
        
        parent::__construct($externalJsCache);
    }

}
