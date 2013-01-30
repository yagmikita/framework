<?php

namespace NG\Prototypes\Interfaces;

use NG\Types as TE,
    NG\Prototypes\Interfaces as I;

interface HasContentInterface
{
    public function addElement(I\HtmlElementInterface $element);
    public function setElements(array $elements);
    public function getElements();
    public function renderElements();    
    public function setContent(TE\String $content);
    public function getContent();   
}