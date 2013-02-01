<?php

namespace NG\Validators;

use NG\Prototypes\Abstracts as A;

class notEmpty extends A\Validator
{
    protected $_defaultMessage = 'The value must not be empty';
    
    public function validate($value)
    {
        if (!isset($value)||is_null($value)||$value=='')
            return false;
        return true;
    }
    
    public function renderError()
    {
        return $this->__get('_defaultMessage');
    }
    
}