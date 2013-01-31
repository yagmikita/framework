<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Hr extends Skeletons\HtmlElementSelfClosed
{
    public function __construct(array $options)
    {
        $options['_name'] = 'hr';
        parent::__construct($options);
    }       
    
}