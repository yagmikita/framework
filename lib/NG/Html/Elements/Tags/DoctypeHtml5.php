<?php

namespace NG\Html\Elements\Tags;

use NG\Html\Elements\Skeletons as Skeletons;

class DoctypeHtml5 extends Skeletons\HtmlElementSelfClosed
{
    protected $_name = '!DOCTYPE html';
    
    public function __construct(array $options)
    {
        $options['_pattern'] = '<%s>';
        $options['_attributes'] = array();
        $options['_validators'] = array();    
        $options['_decorators'] = array();        
        parent::__construct($options);
    }       
    
    /**
     * Render the element itself
     * 
     * @return type
     */
    public function renderElement()
    {
        return vsprintf($this->__get('_pattern'), array(
            $this->__get('_name')
        ));
    }
    
    /**
     * Renders the doctype as the element without decorations
     * 
     * @return type php string
     */
    public function render()
    {
        return $this->renderElement();
    }   
    
    /**
     * Gets the value attribute of the element
     * 
     * @return type php string
     */
    public function value()
    {
        return $this->render();
    }    
}