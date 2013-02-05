<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Html extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'html';
        parent::__construct($options);
    }       
    
}