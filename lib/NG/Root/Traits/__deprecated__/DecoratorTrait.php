<?php

namespace NG\Root\Traits;

use NG\Decorator;

trait DecoratorTrait
{
    public function decorators()
    {
        return $this->__get('_decorators');
    }
    
    public function hasDecorator()
    {
        $d = $this->__get('_decorators');
        if (is_array($d) && count($d))
            return true;
        return false;
    }
    
    
}
