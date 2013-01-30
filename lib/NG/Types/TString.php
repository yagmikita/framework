<?php

namespace Types;

use NG\Prototypes\Abstracts as A,        
    NG\Prototypes\Interfaces as I,
    NG\Application\Exceptions as E;

/**
 * Implementation of String class, which is the wrapper of a string type
 */
class TString extends A\TypeAbstract implements I\HasLengthInterface, I\CanValidTypeInterface
{
    public function __construct($value = null)
    {
        parent::__construct($value, '');
    }
    
    public function length()
    {
       return strlen($this->value()); 
    }
    
    public function isValidType($value)
    {
        return is_string($value);
    }    
    
    /**
     * User Required Section
     */
    
    /**
     * Imitates explode behavior
     * @param php string $separator
     * @return \Types\Types\TArray
     */
    public function explode($separator = ' ')
    {
        return new TArray(explode($separator, $this->trim()));
    }
    
    /**
     * Analog of vsprintf() function
     * 
     * @param array $subs
     * @return php string
     */
    public function substitute(array $subs = array())
    {
        return new TString(vprintf($this->__get('_value'), $subs));
    }
    
    /**
     * Analog of substr() function
     * @param int $from
     * @param int $to
     * @return php string
     */
    public function cut($from = null, $to = null)
    {
        $from = is_null($from)?0:intval($to);
        $to   = is_null($to)?$this->length():intval($to);
        return new TString(substr($this->value(), $from, $to));
    }
    
    /**
     * Converts the value to camel-case format
     * @param php string $separator
     * @return php string
     */
    public function toCamelCase($separator = ' ')
    {
        $complete = '';
        $parts = $this->explode($separator);
        foreach ($parts->value() as $key => $part) {
            $part = new TString($part);            
            if ($key == 0) {
                $complete = $part->toLowerCase()->value();
            } else {
                $complete .= $part->ucfirst()->value();
            }
        }
        $cut = new TString($complete);
        //var_dump($cut->cut(1, $cut->length()-1)->value());
        return $cut->cut(1, $cut->length()-1);
    }
    
    /**
     * Symlink to $this->toCamelCase()
     * @param php string $separator
     * @return php string
     */
    public function camelCase($separator = ' ')
    {
        return $this->toCamelCase($separator);
    }

    /**
     * Converts all the string characters to lower case
     * @return \Types\TString
     */
    public function toLowerCase()
    {
        return new TString(strtolower($this->value()));
    }
    
    /**
     * Symlink to $this->toLowerCase()
     * @return \Types\TString
     */
    public function lowerCase()
    {
        return $this->toLowerCase();
    }
    
    /**
     * Converts all the string characters to upper case
     * @return \Types\TString
     */
    public function toUpperCase()
    {
        return new TString(strtoupper($this->value()));
    }
    
    /**
     * Symlink to $this->toUpperCase()
     * @return \Types\TString
     */
    public function upperCase()
    {
        return $this->toUpperCase();
    }
    
    /**
     * Converts the first string character to upper case
     * @return \Types\TString
     */
    public function ucfirst()
    {
        return new TString(ucfirst($this->value()));
    } 
 
    /**
     * Trims trailing slashes
     * @return \Types\TString
     */
    public function trim()
    {
        return new TString(trim($this->value()));
    }
    
}