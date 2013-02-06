<?php

namespace NG\Base\Traits;

use NG\Base\Exceptions;

trait MagicGet
{
    public function __get($key)
    {
        if (DEBUG_MODE) {
            echo("<p>calling: " . get_class($this) . "->" . $key . "</p>");
        }
        if (property_exists($this, $key)) {
            return $this->$key;
        }
        throw new CodeException(sprintf('Variable "%s" does not exist in class "%s".', $key, get_class($this)));
    }
}