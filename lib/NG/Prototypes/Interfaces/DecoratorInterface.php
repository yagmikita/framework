<?php

namespace NG\Prototypes\Interfaces;

use NG\Types as TE;

interface DecoratorInterface
{
    public function decorate(TE\String $poition);
}