<?php

namespace Types;

use Traits as T,
    Types as TE,
    Prototypes\Abstracts as A,        
    Prototypes\Interfaces as I,
    Application\Exceptions as E;

/**
 * Implementation of Array class, which is the wrapper of a casual array type
 */
class TArray extends A\TypeAbstract implements I\HasLengthInterface,  \Iterator
{   
    protected $_position;
    
    public function __construct($value = null)
    {
        parent::__construct($value, array());
        $this->__set('_position', 0);
    }
    
    public function length()
    {
       return count($this->value()); 
    }
    
    public function isValidType($value)
    {
        return is_array($value);
    }
    
    function rewind()
    {
        $this->__set('_position', 0);
    }

    function current()
    {
        return $this->__get('_value')[$this->key()];
    }

    function key()
    {
        return $this->__get('_position');
    }

    function next()
    {
        $pos = $this->__get('_position');
        $this->__set('_position', $pos++);
    }

    function valid()
    {
        $cur = $this->current();
        return isset($cur);
    }    
    
    /**
     * User Required Section
     */
    
    public function implode($separator = ',')
    {
        return new TE\TString(implode($separator, $this->__get('_value')));
    }
    
}