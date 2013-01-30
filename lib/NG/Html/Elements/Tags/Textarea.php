<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class Textarea extends Skeletons\HtmlElementContainer
{
    protected $_name = 'textarea';
    protected $_defaultAttributes = array(
        'cols' => '80',
        'rows' => '20',
    );    
}