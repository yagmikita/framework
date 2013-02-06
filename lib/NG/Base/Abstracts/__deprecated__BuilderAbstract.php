<?php

namespace NG\Prototypes\Abstracts;

use NG\Base\Traits,
    NG\Base\Interfaces;

abstract class TagBuilderAbstract implements TagBuilderInterface
{
    use magicGet, magicSet;
    
    protected $_tag;
    
    public function tag()
    {
        return $this->__get('_htmlElement');
    }
    
    public function createNewElement()
    {
        $this->__set('_tag', new HtmlElement);
    }
    
}