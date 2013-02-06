<?php

namespace NG\Base\Abstracts;

use NG\Base\Interfaces;

abstract class ErrorContainerAbstract implements ErrorContainerInterface
{
    /**
     * @var array
     */
    protected $_errors = array();
    
    public function addError(Exception $e)
    {
        $errors = $this->errors();
        array_push($errors, $e);
    }
    
    public function errors()
    {
        return $this->__get('_errors');
    }
    
}