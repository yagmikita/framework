<?php

namespace NG\Base\Exceptions;

class FormatException extends Exception
{
    public function __construct($class, $method, $message = 'wrong format provided', $code = 501)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}