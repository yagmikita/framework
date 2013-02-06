<?php

namespace NG\Base\Traits;

trait Value
{
    public function value()
    {
        return $this->__get('_value');
    }
}