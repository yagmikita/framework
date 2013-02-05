<?php

namespace NG\Validator;

use NG\Base\Exception;

class ValidatorMissingException extends MissingException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}