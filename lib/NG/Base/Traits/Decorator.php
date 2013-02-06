<?php

namespace NG\Base\Traits;

trait decorator
{
    public function decorator()
    {
        return $this->__get('_decorator');
    }
}
