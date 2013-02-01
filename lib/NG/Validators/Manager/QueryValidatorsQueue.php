<?php

namespace NG\Validators\Manager;

use NG\Traits as T,
    NG\Validators\Manager as M;

class QueryValidatorsQueue
{
    use T\magicGet, T\magicSet;
    
    /**
     * Validation queue
     * 
     * @var type array
     */
    protected $_validators;
    
    /**
     * The list of errors
     * 
     * @var type array
     */
    protected $_errors = array();
    
    public function __construct(array $validators)
    {
        $this->__set('_validators', $validators);
    }
    
    /**
     * Holds the list of errors if they exist
     * 
     * @return type array
     */
    public function getErrors()
    {
        return $this->__get('_errors');
    }
    
    /**
     * Runs all the queued validators
     * 
     * @param type mixed $value
     * @return type boolean
     */
    public function launchQueue($value)
    {
        $composer = new M\ValidatorComposer;  
        foreach ($this->__get('_validators') as $key => $validatorOpts) {           
            $name = $validatorOpts['name'];
            $params = isset($validatorOpts['params'])?$validatorOpts['params']:array();            
            $initialized = $composer->init($name, $params);
            if (!$composer->validate($value)) {
                $vn = $initialized->getFullyQualifiedValidatorName();
                $errors = $this->__get('_errors');
                array_push($errors, $vn::$msgInvalidValue);
                $this->__set('_errors', $errors);
            }
        }
        return count($this->__get('_errors'))?false:true;
    }
    
}