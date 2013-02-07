<?php

namespace NG\Root\Interfaces;

/**
 * Indicates if some class serves a value
 */
interface ValueInterface
{
    /**
     * @param mixed
     * @return void
     */
    public function setValue($value = null);
    /**
     * @return boolean
     */
    public function hasValue();
    /**
     * @return boolean
     */
    public function clearValue();
    /**
     * @return mixed
     */
    public function value();
}