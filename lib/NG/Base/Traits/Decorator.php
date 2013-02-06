<?php

namespace NG\Base\Traits;

trait Decorator
{
    public function decorator()
    {
        return $this->__get('_decorator');
    }
}
