<?php

namespace NG\Root\Traits;

trait Value
{
    public function value()
    {
        return $this->__get('_value');
    }
}