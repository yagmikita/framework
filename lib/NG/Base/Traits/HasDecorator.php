<?php

namespace NG\Base\Traits;

use NG\Decorator;

trait HasDecorator
{
    public function hasDecorator()
    {
        if ($this->__get('_decorator') instanceof DecoratorInterface)
            return true;
        return false;
    }
}