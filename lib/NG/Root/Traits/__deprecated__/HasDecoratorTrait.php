<?php

namespace NG\Root\Traits;

use NG\Decorator;

trait HasDecoratorTrait
{
    public function hasDecorator()
    {
        if ($this->__get('_decorator') instanceof DecoratorInterface)
            return true;
        return false;
    }
}