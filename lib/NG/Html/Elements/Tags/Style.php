<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Style extends Skeletons\HtmlElementContainer
{
    protected $_name = 'style';
    protected $_defaultAttributes = array(
        'type' => 'text/css',
        'media' => 'screen'
    );    
}