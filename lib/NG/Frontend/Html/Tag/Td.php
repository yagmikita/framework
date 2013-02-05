<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Td extends Skeletons\HtmlElementContainer
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'td';
        parent::__construct($options);
    }       
    
}