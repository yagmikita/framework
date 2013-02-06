<?php

namespace NG\Base\Traits;

trait value
{
    public function value()
    {
        return $this->__get('_value');
    }
}