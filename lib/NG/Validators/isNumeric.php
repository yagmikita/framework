<?php

namespace NG\Validators;

use NG\Prototypes\Abstracts as A;

class isNumeric extends A\Validator
{
    protected $_defaultMessage = 'The value is not a number';
    
    public function validate($value)
    {
        return is_numeric($value);
    }
    
    public function renderError()
    {     
        return $this->__get('_defaultMessage');
    }
        
}