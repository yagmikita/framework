<?php

namespace Prototypes\Abstracts;

use Traits,
    Prototypes\Interfaces as I;

abstract class DecoratorAbstract implements I\DecoratorInterface
{
    use Traits\magicGet, Traits\magicSet;
    
    protected $_params;
    protected $_decorators;
    protected $_validators;
    
    public function __construct(array $params)
    {
        $this->__set('_params', $params);
    }
    
}