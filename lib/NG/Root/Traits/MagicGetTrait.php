<?php

namespace NG\Root\Traits;

use NG\Root\Exception;

trait MagicGetTrait
{
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
        throw new CodeException(__CLASS__, __METHOD__);
    }
}