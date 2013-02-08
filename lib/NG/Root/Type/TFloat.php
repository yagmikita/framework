<?php

namespace NG\Root\Types;

use NG\Prototypes\Abstracts,        
    NG\Prototypes\Interfaces,
    NG\Application\Exceptions;

class TFloat extends A\TypeAbstract
{
    public function __construct($value)
    {
        parent::__construct($value, 0);
    }
    
    public function isValidType($value)
    {
        return is_float($value);
    }
    
}