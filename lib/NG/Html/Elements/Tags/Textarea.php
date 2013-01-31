<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Textarea extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options)
    {
        $options['_name'] = 'textarea';
        $options['_defaultAttributes'] = array(
            'cols' => '80',
            'rows' => '20',            
        );
        parent::__construct($options);
    }       
        
}