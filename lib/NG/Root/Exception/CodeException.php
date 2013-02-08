<?php

namespace NG\Root\Exception;

use NG\Root\Prototype;

class CodeException extends \NG\Root\Prototype\RootException
{
    public function __construct($class, $method, $message = 'source code execution fails', $code = 500)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}