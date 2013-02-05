<?php

namespace NG\Base\Exception;

class MissingException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message, 404);
    }
}