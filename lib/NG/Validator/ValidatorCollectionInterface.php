<?php

namespace NG\Base\Interfaces;

/**
 * Indicates if some class could be validated
 */
interface ValidatorsCollectionInterface
{
    /**
     * @param array $validators
     * @return void
     */
    public function setValidators(array $validators = null);
    /**
     * @return boolean
     */
    public function hasValidators();
    /**
     * @return array
     */
    public function getValidators();
    /**
     * @param ValidatorInterface $validator
     * @return void
     */
    public function addValidator(ValidatorInterface $validator);
    /**
     * @param integer $index
     * @return boolean
     */
    public function removeValidator($index);
    /**
     * @return boolean
     */
    public function validate();
}