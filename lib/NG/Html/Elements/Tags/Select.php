<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Select extends Skeletons\HtmlElementSelfClosed
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'select';
        parent::__construct($options);
    }       
    
}