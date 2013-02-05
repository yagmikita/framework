<?php

namespace NG\Base\Abstracts;

class ErrorContainerAbstract implements ErrorContainerInterface
{
    /**
     * @var array
     */
    protected $_errors;
    
    public function addError(Exception $e)
    {
        
    }
    
    public function errors()
    {
        return $this->__get();
    }
    
}