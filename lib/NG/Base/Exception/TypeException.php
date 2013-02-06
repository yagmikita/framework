<?php

namespace NG\Base\Exception;

class TypeException extends Exception
{
    public function __construct($message = 'Type missmatch')
    {
        parent::__construct($message, 502);
    }
}