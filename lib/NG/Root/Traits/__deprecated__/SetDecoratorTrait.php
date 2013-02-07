<?php

namespace NG\Root\Traits;

use NG\Decorator;

trait SetDecoratorTrait
{
    public function setDecorator(DecoratorInterface $decorator)
    {
        $this->__set('_decorator', $decorator);
    }
}