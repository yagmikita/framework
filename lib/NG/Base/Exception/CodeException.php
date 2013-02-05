<?php

namespace NG\Base\Exception;

class CodeException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message, 500);
    }
}