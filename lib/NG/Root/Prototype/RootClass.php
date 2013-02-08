<?php

namespace NG\Root\Prototype;

use NG\Root\Traits,
    NG\Root\Record,
    NG\Root\Exception,
    NG\Root\Interfaces;

class RootClass extends \stdClass implements \NG\Root\Interfaces\ErrorContainerInterface,
                                             \NG\Root\Interfaces\ResourceInterface
{
    use \NG\Root\Traits\MagicGetTrait,
        \NG\Root\Traits\MagicSetTrait;
    
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