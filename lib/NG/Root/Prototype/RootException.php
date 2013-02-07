<?php

namespace NG\Root\Prototype;

class RootException extends Exception
{
    use MagicGetTrait, MagicSetTrait;
    
    protected $_message;
    
    public function __construct($class, $method, $message = "", $code = 0)
    {
        $message = strlen($message) ? $message : $this->__get('_message');
        $message = "$class :: $method() => $message";
        parent::__construct($message, $code);
    }
    
}