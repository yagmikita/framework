<?php

namespace NG\Root\Traits\Value;

trait ClearValueTrait
{
    public function clearValue()
    {
        $this->__set('_value', null);
    }
}