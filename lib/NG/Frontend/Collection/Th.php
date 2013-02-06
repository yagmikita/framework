<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Th extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'th';
        parent::__construct($options);
    }       
    
}