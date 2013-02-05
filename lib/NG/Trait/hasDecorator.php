<?php

namespace NG\Traits;

use NG\Prototypes\Interfaces as I;

trait hasDecorator {
    public function hasDecorator()
    {
        $d = $this->__get('_decorator');
        if ($d instanceof I\Decorator)
            return true;
        return false;
    }
}