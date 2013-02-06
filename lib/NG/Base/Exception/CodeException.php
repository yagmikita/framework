<?php

namespace NG\Base\Exceptions;

class CodeException extends BaseException
{
    public function __construct($class, $method, $message = 'source code execution fails', $code = 500)
    {
        parent::__construct($class, $method, $message, $code);
    }
    
}