<?php

namespace NG\Base\Abstracts;

use NG\Base\Traits,
    NG\Base\Resource,
    NG\Base\Interfaces,
    NG\Base\Exceptions;

abstract class BaseAbstract extends stdClass implements ErrorContainerInterface, ResourceInterface
{
    use magicGet, magicSet;
    
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
    
    public function type()
    {
        return $this->__get('__type');
    }

    public function setType($type = null)
    {
        $this->__set('_type', is_null($type) ?: ResourceType::RESOURCE_TYPE_FRAMEWORK);
    }

    public function vision()
    {
        return $this->__get('_vision');
    }

    public function setVision($vision)
    {
        $this->__set('_vision', is_null($vision) ?: ResourceVision::RESOURCE_VISION_PUBLIC);
    }
    
    protected function checkResource($entity, $className)
    {
        $reflect = new ReflectionClass($className);        
        if (!(in_array($entity, $reflect->getConstants())))
            throw new TypeException(__CLASS__, __METHOD__);
    }
    
}