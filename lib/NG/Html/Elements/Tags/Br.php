<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Br extends Skeletons\HtmlElementSelfClosed
{
    public function __construct(array $options = array())
    {
        $options['_name'] = 'br';
        parent::__construct($options);
    }       
}