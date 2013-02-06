<?php

namespace NG\Prototypes\Abstracts;

use NG\Prototypes\Abstracts as A,
    NG\Application\Exceptions\TypeException as TypeException;

class ObjectDecorator extends DecoratorAbstract
{   
    public function decorate()
    {
        return $decoration->render();
    }
    
}