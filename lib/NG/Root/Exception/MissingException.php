<?php

namespace NG\Root\Exception;

use NG\Root\Prorotype;

class MissingException extends RootException
{
    public function __construct($class, $method, $message = 'resource is not found', $code = 404)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}