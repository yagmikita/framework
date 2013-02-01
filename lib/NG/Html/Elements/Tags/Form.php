<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Form extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'form';
        $this->__set(
            '_defaultAttributes',
            array(
                'id' => 'form1',
                'name' => 'form1',
                'method' => 'POST',
                'action' => '',
                'enctype' => 'application/x-www-form-urlencoded'
            )
        ); 
        parent::__construct($options);
    }       
    
}