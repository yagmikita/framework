<?php

namespace NG\Decorator;

/**
 * Adds a decoration behavior to some class
 */
interface Decorator
{
    /**
     * @param mixed
     * @return mixed
     */
    public function decorate($value);
}