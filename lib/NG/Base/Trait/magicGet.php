<?php

namespace NG\Traits;

use NG\Base\Exceptions;

trait magicGet {
    public function __get($key)
    {
        if (DEBUG_MODE) {
            echo("<p>calling: " . get_class($this) . "->" . $key . "</p>");
        }
        if (property_exists($this, $key)) {
            return $this->$key;
        }
        throw new Http500Exception(sprintf(ERROR_PARAM, $key, get_class($this)));
    }
}