<?php

namespace NG\Root\Exception;

use NG\Root\Prorotype;

class TypeException extends RootException
{
    public function __construct($class, $method, $message = 'Type missmatch', $code = 502)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}