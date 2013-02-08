<?php

namespace NG\Root\Abstracts;

use NG\Root\Traits\Value,
    NG\Root\Interfaces,
    NG\Root\Prototype;

abstract class ValueAbstract extends \NG\Root\Prototype\RootClass implements \NG\Root\Interfaces\ValueInterface
{
    use \NG\Root\Traits\Value\ValueTrait,
        \NG\Root\Traits\Value\SetValueTrait,
        \NG\Root\Traits\Value\HasValueTrait,
        \NG\Root\Traits\Value\ClearValueTrait;
    
    protected $_value;
    
}