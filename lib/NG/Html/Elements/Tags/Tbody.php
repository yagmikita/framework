<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Tbody extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'tbody';
        parent::__construct($options);
    }       
    
}