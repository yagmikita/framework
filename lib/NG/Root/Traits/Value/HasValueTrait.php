<?php

namespace NG\Root\Traits\Value;

trait HasValueTrait
{
    public function hasValue()
    {
        return (bool)!is_null($this->value());
    }
}