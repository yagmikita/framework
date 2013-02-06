<?php

namespace NG\Decorator;

/**
 * Indicates if some class could be decorated
 */
interface DecoratorsCollectionInterface
{
    /**
     * @param array $decorators
     * @return void
     */
    public function setDecorators(array $decorators = null);
    /**
     * @return boolean
     */
    public function hasDecorators();    
    /**
     * @return array
     */
    public function getDecorators();
    /**
     * @param \NG\Base\Interfaces\DecoratorInterface $decorator
     * @return void
     */
    public function addDecorator(DecoratorInterface $decorator);
    /**
     * @param integer $index
     * @return boolean
     */
    public function removeDecorator($index);    
    /**
     * Luanches the decoration chain
     * @return mixed
     */
    public function decorate();
}