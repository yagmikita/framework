<?php

namespace NG\Base\Exceptions;

class TypeException extends Exception
{
    public function __construct($class, $method, $message = 'Type missmatch', $code = 502)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}