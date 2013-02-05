<?php

namespace NG\Validator;

/**
 * Adds a validation behavior to some class
 */
interface ValidatorInterface
{
    /**
     * @param mixed $value
     * @return boolean
     */
    public function validate($value);
}