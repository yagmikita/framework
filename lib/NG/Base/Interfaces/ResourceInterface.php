<?php

namespace NG\Base\Interfaces;

/**
 * Adds render behavoir
 */
interface ResourceInterface
{
    /**
     * @return string
     */
    public function type();
    /**
     * @param string $type
     */
    public function setType($type);
    /**
     * @return string
     */
    public function vision();
    /**
     * @param string
     */
    public function setVision($vision);
}