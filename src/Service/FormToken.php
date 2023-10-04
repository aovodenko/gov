<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class FormToken
{
    protected $requestStack;
    
    public function __construct(RequestStack $requestStack) 
    {
        $this->requestStack = $requestStack;
    }

    public function generateFormToken(string $form) 
    {
        $session = $this->requestStack->getSession();
        
       // generate a token from an unique value
    	$token = md5(uniqid(microtime(), true));  
    	
    	// Write the generated token to the session variable to check it against the hidden field when the form is sent
    	$_SESSION[$form . '_token'] = $token;
        
        $session->set($form . '_token', $token);
    	
    	return $token;
    }
    
}
