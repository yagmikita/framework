<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Link extends Skeletons\HtmlElementSelfClosed
{
    public function __construct(array $options)
    {
        $options['_name'] = 'link';
        $options['_defaultAttributes'] = array(
            'rel' => 'stylesheet',
            'type' => 'text/css',
        );
        parent::__construct($options);
    }       
        
}