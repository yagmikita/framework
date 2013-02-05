<?php

namespace NG\Traits;

use NG\Prototypes\Interfaces as I;

trait hasValidator {
    public function hasValidator()
    {
        $v = $this->__get('_validator');
        if ($v instanceof I\Validator)
            return true;
        return false;
    }
}