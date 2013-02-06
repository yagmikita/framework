<?php

namespace NG\Base\Traits;

use NG\Decorator;

trait setDecorator
{
    public function setDecorator(DecoratorInterface $decorator)
    {
        $this->__set('_decorator', $decorator);
    }
}