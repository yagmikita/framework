<?php

namespace NG\Base\Interfaces;

/**
 * Request glue
 */
interface RequestInterface
{
    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public function getParam($key, $default);
    /**
     * @return string
     */    
    public function getParams();
}
