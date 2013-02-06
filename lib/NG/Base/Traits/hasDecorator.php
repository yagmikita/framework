<?php

namespace NG\Base\Traits;

use NG\Decorator;

trait hasDecorator
{
    public function hasDecorator()
    {
        if ($this->__get('_decorator') instanceof DecoratorInterface)
            return true;
        return false;
    }
}