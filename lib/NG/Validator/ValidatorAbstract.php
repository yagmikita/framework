<?php

namespace NG\Validator;

use NG\Base\Traits,
    NG\Base\Interfaces;

abstract class ValidatorAbstract implements ValidatorInterface
{
    use magicGet, magicSet;
    
    /**
     * Essential params to launch the validator
     * @var array
     */
    protected $_params;
    /**
     * Message when validation fails
     * @var string
     */
    protected $_errorMessage;
    
    public function __construct(array $params = array(), $errorMsg = '')
    {
        $this->__set('_params', $params);
        if ($msg->length())
            self::$msgInvalidValue = $msg->value();
        else
            self::$msgInvalidValue = $this->renderError();       
    }

}