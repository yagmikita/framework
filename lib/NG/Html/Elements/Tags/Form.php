<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Form extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options)
    {
        $options['_name'] = 'form';
        $options['_attributes'] = array(
            'id' => 'form1',
            'name' => 'form1',
            'method' => 'POST',
            'action' => '',
            'enctype' => 'application/x-www-form-urlencoded'
        ); 
        parent::__construct($options);
    }       
    
}