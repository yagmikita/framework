<?php

namespace NG\Decorator;

use NG\Root\Prototype;

abstract class DecoratorManagerAbstract extends RootClass implements DecoratorCollectionInterface
{
    /**
     * Holds the decorators collection
     * @var array
     */
    protected $_decorators;
}