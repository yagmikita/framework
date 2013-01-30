<?php

namespace NG\Prototypes\Abstracts;

use NG\Traits as T,
    NG\Prototypes\Interfaces as I;

abstract class DecoratorAbstract implements I\DecoratorInterface
{
    use T\magicGet, T\magicSet;
    
    protected $_params;
    protected $_decoration;
    
    public function __construct(array $params)
    {
        $this->__set('_params', $params);
    }
    
}