<?php

namespace NG\Prototypes\Interfaces;

interface HasValidatorsInterface
{
    public function addValidator(ValidatorInterface $validator);    
    public function setValidators(array $validators = null);
    public function hasValidators();
    public function getValidators();
    public function proceedValidation();
    public function getErrors();
}