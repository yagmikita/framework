<?php

namespace NG\Prototypes\Interfaces;

interface HasDecoratorsInterface
{
    public function addDecorator(DecoratorInterface $decorator);
    public function setDecorators(array $decorators = null);
    public function hasDecorators();    
    public function getDecorator();
    public function applyDecorations($content);
}