<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Input extends Skeletons\HtmlElementSelfClosed
{
    public function __construct(array $options)
    {
        $options['_name'] = 'input';
        parent::__construct($options);
    }    
}