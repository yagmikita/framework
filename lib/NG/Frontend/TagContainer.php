<?php

namespace NG\Frontend\Html;

use NG\Base\Types\TString as String;

/**
 * Container html element with inner content
 * 
 * @author Gopkalo Nikita <yagmikita@gmail.com>
 */
class TagContainer extends TagAbstract implements ElementsCollectionInterface, ContentInterface
{
    /**
     * The inner plain text content of the element
     * 
     * @var type Types\String
     */
    protected $_content = '';
    
    /**
     * If content if not defined, then the list of elements is being rendered
     * 
     * @var type 
     */
    protected $_elements = array();
    
    /**
     * Public constructor - overrides the abstract constructor
     * 
     * @param array $options
     */
    public function __construct(array $options = array())
    {
        $options['_pattern'] =  '<%s %s>%s</%s>';
        $options['_selfClosed'] =  false;    
        parent::__construct($options);
    }
    
    /**
     * Add the HtmlElementInterface element the the end of the elements list
     * 
     * @param \NG\Base\Interfaces\HtmlElementInterface $element
     */
    public function addElement($element)
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
        if (!is_string($content))
            $content = (string)$content;
        $this->__set('_content', $content);
    }
    
    /**
     * Gets the inner content (html chunk) of the element
     * 
     * @return string
     */
    public function getContent()
    {
        return $this->__get('_content');
    }
    
    /**
     * Renders all included elements which form
     * the inner content of the current element
     * 
     * @return string
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
     * @return string
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
     * @return string
     */
    public function innerHTML()
    {
        return $this->value();
    }

    /**
     * Renders the element itself using $this->_pattern template
     * 
     * @return string
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