<?php

namespace NG\Base\Traits;

use NG\Decorator;

trait SetDecorator
{
    public function setDecorator(DecoratorInterface $decorator)
    {
        $this->__set('_decorator', $decorator);
    }
}