<?php

namespace NG\Decorator;

/**
 * Indicates, if the class has the ability to decorate itself
 */
interface DecoratorAwareInterface
{
    /**
     * Sets the manager wich will manage all decorations
     * @param \NG\Decorator\DecoratorManager $manager
     * @return void
     */
    public function setDecorator(DecoratorManager $manager);
}