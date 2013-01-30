<?php

namespace NG\Types;

use NG\Prototypes\Abstracts as A,        
    NG\Prototypes\Interfaces as I,
    NG\Application\Exceptions as E;

class TInt extends A\TypeAbstract
{   
    public function __construct($value)
    {
        parent::__construct($value, 0);
    }
    
    public function isValidType($value)
    {
        return is_int($value);
    }
    
}