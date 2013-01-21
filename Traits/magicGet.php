<?php

namespace Traits;

use Application\Exceptions as error;

trait magicGet {
    public function __get($key)
    {
        if (DEBUG_MODE) {
            echo("<p>calling: " . get_class($this) . "->" . $key . "</p>");
        }
        if (property_exists($this, $key)) {
            return $this->$key;
        }
        throw new error\Http500Exception(sprintf(CLASS_PARAM_IS_NOT_SET, $key, get_class($this)));
    }
}