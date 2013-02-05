<?php

namespace NG\Prototypes\Abstracts;

use NG\Traits as T,
    NG\Prototypes\Interfaces as I;

abstract class BuilderAbstract implements I\BuilderInterface
{
    use T\magicGet, T\magicSet;
    
    protected $_element;
    
    public function getElement()
    {
        return $this->__get('_htmlElement');
    }
    
    public function createNewElement()
    {
        $this->__set('_element', new HtmlElement);
    }
    
}