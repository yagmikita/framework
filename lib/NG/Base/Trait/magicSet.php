<?php

namespace NG\Traits;

use NG\Base\Exceptions;

trait magicSet {
    public function __set($key, $value)
    {
        if (DEBUG_MODE) {
            echo("<p>setting: " . get_class($this) . "->" . $key . " = " . $value . "</p>");
        }   
        if (property_exists($this, $key)) {
            $this->$key = $value;
        } else {
            throw new Http500Exception(sprintf(ERROR_PARAM, $key, get_class($this)));
        }
    }
}