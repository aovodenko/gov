<?php
namespace App\Lib;

use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class ExternalJS {

    protected $_server;
    protected $_path;
    protected $_cache_base = 'cache/';
    protected $_cache_filename;
    protected $_cache_content;
    protected $_gzip = false;
    protected $_version = 'v=1001';
    protected $_externalJsCache;
    
    public function __construct(CacheInterface $externalJsCache) {
        $this->_externalJsCache = $externalJsCache;
    }
    
    public function cache_write() {
        ob_start();

        $fp = fsockopen($this->_server, 80, $errno, $errstr, 30);

        if ($fp) {
            $out = "GET " . $this->_path . " HTTP/1.1\r\n";
            $out .= "Host: " . $this->_server . "\r\n";
            $out .= "Connection: Close\r\n\r\n";

            fwrite($fp, $out);

            while (!feof($fp)) {
                echo fgets($fp, 128);
            }

            fclose($fp);
        } else {
            //throw new Exception(sprintf('Server %s not response', $this->_server));
        }

        if ($response = ob_get_clean()) {
            list($head, $body) = explode("\r\n\r\n", $response);

            if ($this->_gzip) {
                $body = gzdecode($body);
            }

            if ($body) {
                return $body;
            } else {
                //throw new Exception(sprintf('Server %s response body is empty', $this->_server));
            }
        } else {
            //throw new Exception(sprintf('Server %s response is empty', $this->_server));
        }
        
        return false;
    }

    public function cache_read() {
        if ($this->get_content()) {
            echo '<script type="text/javascript">' . $this->get_content() . '</script>';
        } else {
            echo '<script type="text/javascript" src="//' . $this->_server . $this->_path . '"></script>';
        }
    }

    public function get_content() {
        if (!$this->_cache_content) {
            $this->_set_content();
        }

        return $this->_cache_content;
    }

    protected function _set_content() {
        $this->_cache_content = $this->_externalJsCache->get($this->_cache_filename, function (ItemInterface $item) 
        {
            return $this->cache_write();
        });       
    }

}
