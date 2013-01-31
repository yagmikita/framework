<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Style extends Skeletons\HtmlElementContainer
{   
    public function __construct(array $options)
    {
        $options['_name'] = 'style';
        $options['_defaultAttributes'] = array(
            'type' => 'text/css',
            'media' => 'screen'           
        );        
        parent::__construct($options);
    }       
        
}