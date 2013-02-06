<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Meta extends Skeletons\HtmlElementSelfClosed
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'meta';
        parent::__construct($options);
    }       
    
}