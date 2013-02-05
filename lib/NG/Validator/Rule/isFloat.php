<?php

namespace NG\Validators;

use NG\Prototypes\Abstracts as A;

class isFloat extends A\Validator
{
    protected $_defaultMessage = 'The value is not a valid floating point number';
    
    public function validate($value)
    {
        return is_float($value);
    }
    
    public function renderError()
    {
        return $this->__get('_defaultMessage');
    }
        
}