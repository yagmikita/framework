<?php

namespace Traits;

trait value {
    public function value($value = null)
    {
        if (is_null($value)) return $this->__get('_value');
        else $this->__set('_value', $value);
        return true;
    }
}