<?php

namespace NG\Root\Type;

use NG\Root\Prototype,
    NG\Root\Excetion,
    NG\Root\Interfaces;

/**
 * Implementation of String class, which is the wrapper of a string type
 */
class TString extends \NG\Root\Prototype\RootType implements \NG\Root\Interfaces\LengthInterface
{
    public function __construct($value = null)
    {
        parent::__construct($value, '');
    }
    
    public function length()
    {
       return strlen($this->value()); 
    }
    
    public function validateType($value)
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
        return new \NG\Root\Type\TArray(explode($separator, $this->trim()));
    }
    
    /**
     * Analog of vsprintf() function
     * 
     * @param array $subs
     * @return php string
     */
    public function substitute(array $subs = array())
    {
        return new \NG\Root\Type\TString(vprintf($this->__get('_value'), $subs));
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
        return new \NG\Root\Type\TString(substr($this->value(), $from, $to));
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
            $part = new \NG\Root\Type\TString($part);            
            if ($key == 0) {
                $complete = $part->toLowerCase()->value();
            } else {
                $complete .= $part->ucfirst()->value();
            }
        }
        $cut = new \NG\Root\Type\TString($complete);
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
        return new \NG\Root\Type\TString(strtolower($this->value()));
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
        return new \NG\Root\Type\TString(strtoupper($this->value()));
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
        return new \NG\Root\Type\TString(ucfirst($this->value()));
    } 
 
    /**
     * Trims trailing slashes
     * @return \Types\TString
     */
    public function trim()
    {
        return new \NG\Root\Type\TString(trim($this->value()));
    }
    
}