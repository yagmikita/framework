<?php

namespace NG\Root\Traits;

use NG\Validator;

trait SetValidatorTrait
{
    public function setValidator(ValidatorInterface $validator)
    {
        $this->__set('_validator', $validator);
    }
}