<?php

namespace NG\Root\Traits\Value;

trait SetValueTrait
{
    public function setValue($value = null)
    {
        $this->__set('_value', $value);
    }   
}