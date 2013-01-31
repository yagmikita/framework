<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Div extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options)
    {
        $options['_name'] = 'div';
        parent::__construct($options);
    }       
}