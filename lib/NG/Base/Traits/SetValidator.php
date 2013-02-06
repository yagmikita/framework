<?php

namespace NG\Base\Traits;

use NG\Validator;

trait setValidator
{
    public function setValidator(ValidatorInterface $validator)
    {
        $this->__set('_validator', $validator);
    }
}