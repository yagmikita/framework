<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Script extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'script';
        $this->__set(
            '_defaultAttributes',
            array(
                'type' => 'text/javascript'
            )
        );        
        parent::__construct($options);
    }       
        
}