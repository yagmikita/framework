<?php

namespace NG\Validators;

use NG\Types as TE,
    NG\Prototypes\Abstracts as A;

class isCreditCardFormat extends A\Validator
{
    protected $_defaultMessage = 'The value is not a valid Credit Card number';
    
    public function validate($value)
    {
        $value   = TE\String($value);
        $pattern = '/^\d{4}[\s\-]?\d{4}[\s\-]?\d{4}[\s\-]?\d{4}$/g';
        if (preg_match($pattern, $value))
            return true;
        return false;
    }
    
    public function renderError()
    {
        return $this->__get('_defaultMessage');
    }
        
}