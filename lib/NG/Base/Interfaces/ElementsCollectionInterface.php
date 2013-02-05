<?php

namespace NG\Base\Interfaces;

/**
 * Indicates if some class could have the set of elements
 */
interface ElementsCollectionInterface
{
    /**
     * @param array $elements
     * @return void
     */
    public function setElements(array $elements);
    /**
     * @return array
     */
    public function getElements();
    /**
     * @return boolean
     */
    public function hasElements();
    /**
     * @param mixed $element
     */
    public function addElement($element);
    /**
     * @param integer $index
     * @return boolean
     */
    public function removeElement($index);
}