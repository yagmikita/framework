<?php

namespace NG\Prototypes\Interfaces;

interface HasValidatorsInterface
{
    public function addValidator(\Validator $validator);    
    public function setValidators(array $validators);
    public function hasValidators();
    public function getValidators();
    public function proceedValidation();
    public function getErrors();
}