<?php

namespace NG\Validator;

use NG\Base\Exception;

class ValidatorCodeException extends CodeException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}