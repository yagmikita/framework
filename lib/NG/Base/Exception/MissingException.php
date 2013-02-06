<?php

namespace NG\Base\Exceptions;

class MissingException extends Exception
{
    public function __construct($class, $method, $message = 'resource is not found', $code = 404)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}