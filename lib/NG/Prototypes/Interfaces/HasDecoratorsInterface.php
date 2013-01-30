<?php

namespace NG\Prototypes\Interfaces;

interface HasDecoratorsInterface
{
    public function addDecorator(\Decorator $decorator);
    public function setDecorators(array $decorators);
    public function hasDecorators();    
    public function getDecorator();
    public function applyDecorations($content);
}