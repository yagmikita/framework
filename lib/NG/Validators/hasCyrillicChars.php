<?php

namespace NG\Validators;

use NG\Types as TE,
    NG\Prototypes\Abstracts as A;

class hasCyrillicChars extends A\Validator
{
    protected $_defaultMessage = 'The value does not have a single cyrillic character';
    
    public function validate($value)
    {
        $value   = TE\String($value);
        $pattern = '/[\p{А-Яа-яЁё}]+/g';
        if (preg_match($pattern, $value->value()))
            return true;
        return false;
    }
    
    public function renderError()
    {
        return $this->__get('_defaultMessage');
    }
        
}