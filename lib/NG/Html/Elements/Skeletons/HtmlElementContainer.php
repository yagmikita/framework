<?php

namespace NG\Html\Elements\Skeletons;

use NG\Prototypes\Interfaces as I,
    NG\Prototypes\Abstracts as A,
    NG\Types\TString as String;

/**
 * Container html element with inner content
 * 
 * @author Gopkalo Nikita <yagmikita@gmail.com>
 */
class HtmlElementContainer extends A\HtmlElementAbstract implements I\HasContentInterface
{
    /**
     * The inner plain text content of the element
     * 
     * @var type Types\String
     */
    protected $_content;
    
    /**
     * If content if not defined, then the list of elements is being rendered
     * 
     * @var type 
     */
    protected $_elements;
    
    /**
     * Public constructor - overrides the abstract constructor
     * 
     * @param array $options
     */
    public function __construct(array $options = array())
    {
        $options['_pattern'] =  '<%s %s>%s</%s>';
        $options['_selfClosed'] =  false;
        $options['_content'] =  new String();
        $options['_elements'] =  array();        
        parent::__construct($options);
    }
    
    /**
     * Add the HtmlElementInterface element the the end of the elements list
     * 
     * @param \Prototypes\Interfaces\HtmlElementInterface $element
     */
    public function addElement(I\HtmlElementInterface $element)
    {
        $elements = $this->__get('_elements');
        $elements = is_array($elements)?$elements:array();
        array_push($elements, $element);
        $this->setElements($elements);
    }
    
    /**
     * Sets the list of included elements
     * 
     * @param array $elements
     */
    public function setElements(array $elements)
    {
        $this->__set('_elements', $elements);
    }
    
    /**
     * Gets the list of included elements
     * 
     * @return type
     */
    public function getElements()
    {
        return $this->__get('_elements');
    }
    
    /**
     * Sets the inner content of the element
     * 
     * @param mixed $content
     */
    public function setContent($content)
    {
        if ($content instanceof String)
            $this->__set('_content', $content);
        elseif (is_string($content))
            $this->__set('_content', new String($value));
    }
    
    /**
     * Gets the inner content (html chunk) of the element
     * 
     * @return type php string
     */
    public function getContent()
    {
        return $this->__get('_content')->value();
    }
    
    /**
     * Renders all included elements which form
     * the inner content of the current element
     * 
     * @return type php string
     */
    public function renderElements()
    {
        $content = '';
        $elements = $this->__get('_elements');
        if (!count($elements))
            return $content;
        foreach ($elements as $element) {
            $content .= $element->render();
        }
        return $content;
    }

    /**
     * Gets the inner content of the element
     * 
     * @return type php string
     */
    public function value($value = null)
    {
        $content = new String($this->getContent());
        if ($content->length())
            return $this->getContent();
        else
            return $this->renderElements();
    }
    
    /**
     * Symlink to a $this->value() method
     * 
     * @return type php string
     */
    public function innerHTML()
    {
        return $this->value();
    }

    /**
     * Renders the element itself using $this->_pattern template
     * 
     * @return type php string
     */
    public function renderElement()
    {
        return vsprintf(
            $this->__get('_pattern'),
            array(
                $this->__get('_name'),
                $this->renderAttributes(),
                $this->renderElements(),
                $this->__get('_name'),
            )
        );
    }
    
}