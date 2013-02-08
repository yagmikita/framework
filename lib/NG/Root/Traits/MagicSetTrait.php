<?php

namespace NG\Root\Traits;

use NG\Root\Exception;

trait MagicSetTrait
{
    public function __set($key, $value)
    {
        if (property_exists($this, $key)) {
            $this->$key = $value;
        } else {
            throw new \NG\Root\Exception\CodeException(__CLASS__, __METHOD__);
        }
    }
}