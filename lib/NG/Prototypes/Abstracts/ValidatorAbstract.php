<?php

namespace NG\Prototypes\Abstracts;

use NG\Types as TE,
    NG\Traits as T,
    NG\Prototypes\Interfaces as I;

abstract class ValidatorAbstract implements I\ValidatorInterface
{
    use T\magicGet, T\magicSet;
    
    public static $MSG_INVALID_VALUE;
        
    protected $_params;
    
    protected $_defaultMessage;    
    
    public function __construct(array $params = array(), $errorMsg = '')
    {
        $this->__set('_params', $params);
        $msg = new TE\String($errorMsg);
        if ($msg->length())
            self::$MSG_INVALID_VALUE = $msg->value();
        else
            self::$MSG_INVALID_VALUE = $this->renderError();       
    }
    
    public function getError()
    {
        return self::$MSG_INVALID_VALUE;
    }
    
}