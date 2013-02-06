<?php

namespace NG\Base\Exceptions;

class RootException extends Exception
{
    use magicGet, magicSet;
    
    protected $_message;
    
    public function __construct($class, $method, $message = "", $code = 0)
    {
        $message = strlen($message) ? $message : $this->__get('_message');
        $message = "$class :: $method() => $message";
        parent::__construct($message, $code);
    }
    
}