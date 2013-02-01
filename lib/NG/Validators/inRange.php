<?php

namespace NG\Validators;

use NG\Types as TE,
    NG\Prototypes\Abstracts as A;

class inRange extends A\Validator
{
    protected $_defaultMessage = 'The value in not in a set range';
    
    public function validate($value)
    {
        $value   = TE\String($value);
        $range =    is_array($this->__get('_params')['range']) ? 
                    $this->__get('_params')['range'] : 
                    array($this->__get('_params')['range']);
        return in_array($value, $range);
    }
    
    public function renderError()
    {
        return $this->__get('_defaultMessage');
    }
        
}