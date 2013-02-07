<?php

namespace NG\Root\Exception;

use NG\Root\Prorotype;

class CodeException extends RootException
{
    public function __construct($class, $method, $message = 'source code execution fails', $code = 500)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}