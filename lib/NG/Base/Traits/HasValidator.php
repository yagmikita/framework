<?php

namespace NG\Base\Traits;

use NG\Validator;

trait HasValidator
{
    public function hasValidator()
    {
        if ($this->__get('_validator') instanceof ValidatorInterface)
            return true;
        return false;
    }
}