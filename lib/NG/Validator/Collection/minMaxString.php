<?php

namespace NG\Validators;

use NG\Types as TE,
    NG\Prototypes\Abstracts as A;

class minMaxString extends A\Validator
{
    protected $_defaultMessage = 'The value does not satisfy the min-max requirements (%s-%s)';
    
    public function validate($value)
    {
        $value = new TE\String($value);
        $min = isset($this->__get('_params')['min'])?$this->__get('_params')['min']:0;
        $max = isset($this->__get('_params')['max'])?$this->__get('_params')['max']:$value->length();
        return $value->length()>=$min&&$value->length()<=$max;
    }
    
    public function renderError()
    {
        $min = isset($this->__get('_params')['min'])?$this->__get('_params')['min']:0;
        $max = isset($this->__get('_params')['max'])?$this->__get('_params')['max']:$value->length();        
        return sprintf($this->__get('_defaultMessage'), $min, $max);
    }

}