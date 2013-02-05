<?php

namespace NG\Base\Interfaces;

/**
 * Indicates if some class could have errors
 */
interface ErrorContainerInterface
{
    /**
     * @param \Exception $e
     * @return void
     */
    public function addError(\Exception $e);
    /**
     * @return array
     */
    public function errors();
}