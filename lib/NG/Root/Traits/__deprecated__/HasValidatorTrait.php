<?php

namespace NG\Root\Traits;

use NG\Validator;

trait HasValidatorTrait
{
    public function hasValidator()
    {
        if ($this->__get('_validator') instanceof ValidatorInterface)
            return true;
        return false;
    }
}