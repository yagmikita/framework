<?php

namespace NG\Root\Exception;

use NG\Root\Prorotype;

class TypeException extends \NG\Root\Prototype\RootException
{
    public function __construct($class, $method, $message = 'Type missmatch', $code = 502)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}