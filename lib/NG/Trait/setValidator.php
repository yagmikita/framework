<?php

namespace NG\Traits;

use NG\Prototypes\Interfaces as I;

trait setValidator {
    public function setValidator(I\Validator $validator)
    {
        $this->__set('_validator', $validator);
    }
}