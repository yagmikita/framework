<?php

namespace NG\Trait;

trait decorator {
    public function decorator()
    {
        return $this->__get('_decorator');
    }
}
