<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Head extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options)
    {
        $options['_name'] = 'head';
        parent::__construct($options);
    }       
    
}