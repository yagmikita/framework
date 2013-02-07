<?php

namespace NG\Root\Prototypes;

use NG\Root\Traits,
    NG\Root\Exception,
    NG\Root\Interfaces;

class RootType implements ValueInterface, JsonSerializable, CanValidTypeInterface
{
    const ERROR_TYPE = "The value is not of a valid type";
    
    use MagicGet, MagicSet, Value;
    
    protected $_value;
        
    public function __construct($value, $initial)
    {
        if (is_null($value))
            $this->__set('_value', $initial);
        elseif ($this->isValidType($value))
            $this->__set('_value', $value);
        else
            throw new TypeException(self::ERROR_TYPE, 500);
    }
    
    public function jsonSerialize()
    {
        return $this->value();
    }
    
    public function __toString()
    {
        return json_encode($this);
    }
    
}