<?php

namespace NG\Base\Exception;

class FormatException extends Exception
{
    public function __construct($message = 'Wrong format provided')
    {
        parent::__construct($message, 501);
    }
}