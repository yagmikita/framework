<?php

namespace NG\Root\Exception;

use NG\Root\Prorotype;

class FormatException extends RootException
{
    public function __construct($class, $method, $message = 'wrong format provided', $code = 501)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}