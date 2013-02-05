<?php

namespace NG\MakeUp\Html;

use NG\Base\Abstracts;

/**
 * Self-closed html element with has no inner content
 * 
 * @author Gopkalo Nikita <yagmikita@gmail.com>
 */
class AloneElement extends HtmlElementAbstract
{
    /**
     * Public constructor - overrides the abstract constructor
     * 
     * @param array $options
     */    
    public function __construct(array $options = array())
    {
        $options['_pattern'] = '<%s %s>';
        $options['_selfClosed'] = true;
        parent::__construct($options);
    }
 
    /**
     * Render the element itself
     * 
     * @return type
     */
    public function renderElement()
    {
        return vsprintf(
            $this->__get('_pattern'),
            array(
                $this->__get('_name'),
                $this->renderAttributes(),
            )
        );
    }
    
    /**
     * Gets the value attribute of the element
     * 
     * @return type php string
     */
    public function value($value = null)
    {
        return isset($this->__get('_attributes')['value'])?$this->__get('_attributes')['value']:'';
    }
    
}