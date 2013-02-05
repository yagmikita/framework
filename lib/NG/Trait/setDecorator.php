<?php

namespace NG\Traits;

use NG\Prototypes\Interfaces as I;

trait setDecorator {
    public function setDecorator(I\Decorator $decorator)
    {
        $this->__set('_decorator', $decorator);
    }
}