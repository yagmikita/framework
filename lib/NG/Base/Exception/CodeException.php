<?php

namespace NG\Base\Exception;

class CodeException extends Exception
{
    public function __construct($message = 'Source code execution fails')
    {
        parent::__construct($message, 500);
    }
}