<?php

namespace NG\Root\Traits\Value;

trait ValueTrait
{
    public function value()
    {
        return $this->__get('_value');
    }    
}