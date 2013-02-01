<?php

namespace NG\Prototypes\Abstracts;

use NG\Prototypes\Abstracts as A,
    NG\Application\Exceptions\TypeException as TypeException;

class ObjectBasedUIDecorator extends A\DecoratorAbstract
{   
    public function decorate()
    {
        return $decoration->render();
    }
    
}