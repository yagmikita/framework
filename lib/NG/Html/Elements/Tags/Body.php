<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Body extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options)
    {
        $options['_name'] = 'body';
        parent::__construct($options);
    }       
}