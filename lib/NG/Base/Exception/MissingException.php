<?php

namespace NG\Base\Exception;

class MissingException extends Exception
{
    public function __construct($message = 'Resource is not found')
    {
        parent::__construct($message, 404);
    }
}