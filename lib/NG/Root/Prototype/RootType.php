<?php

namespace NG\Root\Prototype;

use NG\Root\Traits,
    NG\Root\Exception,
    NG\Root\Interfaces,
    NG\Root\Abstracts;

abstract class RootType extends \NG\Root\Abstracts\ValueAbstract implements \JsonSerializable
{
    public function __construct($value, $initial)
    {
        if (is_null($value))
            $this->__set('_value', $initial);
        elseif ($this->validateType($value))
            $this->__set('_value', $value);
        else
            throw new \NG\Root\Exception\TypeException(__CLASS__, __METHOD__);
    }
    
    public function jsonSerialize()
    {
        return json_encode($this);
    }
    
    public function __toString()
    {
        return json_encode($this->value());
    }
    
}