<?php

namespace NG\Application\Exceptions;

class FormatException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message, 503);
    }
    
}