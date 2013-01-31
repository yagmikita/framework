<?php

namespace NG\Prototypes\Abstracts;

use NG\Traits as T,
    NG\Prototypes\Interfaces as I,
    NG\Application\Exceptions as E,
    NG\Validators\Manager\QueryValidatorsQueue;

abstract class HtmlElementAbstract implements I\HtmlElementInterface
{
    use T\magicGet, T\magicSet,
        T\setValidator, T\getValidator, T\hasValidator,
        T\setDecorator, T\getDecorator, T\hasDecorator;

    /**
     * Error messages
     */
    const ERROR_INVALID_OPTIONS = "The options are in the invalid format. Check the requirements.";
    
    /**
     * The name of the Element
     * * - required
     * 
     * @var type php string
     */
    protected $_name;   
    
    /**
     * Thre set of attributes to use if no attributes are set, but defaults exist
     * 
     * @var type php array
     */
    protected $_defaultAttributes = array();
    
    /**
     * Represents the string pattern to be rendered by Prototypes\Interfaces\Renderable
     * * - required
     * 
     * @var type php string
     */
    protected $_pattern;
    
    /**
     * Represents the array of html tag attributes
     * * - required
     * 
     * @var type php array
     */
    protected $_attributes;
    
    /**
     * This flag indicates, whether the tag is self-closed
     * * - required
     * 
     * @var type 
     */
    protected $_selfClosed;   
    
    /**
     * The decorator object of the element
     * 
     * @var type Prototypes\Interfaces\Decorator
     */    
    protected $_decorators;
    
    /**
     * The validator object of the element
     * 
     * @var type Prototypes\Interfaces\Decorator
     */    
    protected $_validators;
    
    /**
     * Holds the last validation error list
     * 
     * @var type array
     */
    protected $_validationErrors = array();
    
    /**
     * 
     * @param array $options
     * @throws error\InvalidOptionsException
     */
    public function __construct(array $options)
    {
        $attributes = isset($options['_attributes'])?$options['_attributes']:$this->__get('_defaultAttributes');
        $decorators  = isset($options['_decorators'])?$options['_decorators']:null;
        $validators  = isset($options['_validators'])?$options['_validators']:null;   
        $options['_attributes'] = $attributes;
        $options['_decorators'] = $decorators;
        $options['_validators'] = $validators;
        if (!self::areOptionsValid($options))
            throw new E\InvalidOptionsException('The options you are trying to set are not valid', 500);
        $this->__set('_name', $options['_name']);
        $this->__set('_pattern', $options['_pattern']);
        $this->__set('_selfClosed', $options['_selfClosed']);
        $this->__set('_attributes', $attributes);
        $this->setDecorators($decorators);
        $this->setValidators($validators);
    }
    
    public static function areOptionsValid(array $a)
    {
        if (isset($a['_name'])&&isset($a['_selfClosed'])&&isset($a['_pattern'])) {
            if (count($a['_attributes']))
                return true;
            else
                return false;
        }
    }
    
    public function addValidator(I\ValidatorInterface $validator)
    {
        $validators = $this->__get('_validators');
        array_push($validators, $validator);
        $this->__set('_validators', $validators);
    }
    
    public function getValidators()
    {
        return $this->__get('_validators');
    }
    
    public function setValidators(array $validators = null)
    {
        $this->__set('_validators', $validators);
    }
    
    public function hasValidators()
    {
        return count($this->__get('_validators'))?true:false;
    }
    
    public function proceedValidation()
    {
        $manager = QueryValidatorsQueue($this->__get('_validators'));
        if (!$manager->launchQueue($this->value())) {
            $this->__set('_validationErrors', $value);
            return false;
        } else {
            $this->__set('_validationErrors', array());
            return true;            
        }
    }
    
    public function addDecorator(I\DecoratorInterface $decorator)
    {
        $decorators = $this->__get('_decorators');
        array_push($decorators, $decorator);
        $this->__set('_decorators', $decorators);
    }
    
    public function getDecorators()
    {
        return $this->__get('_decorators');
    }
    
    public function setDecorators(array $decorators = null)
    {
        $this->__set('_decorators', $decorators);
    }
    
    public function hasDecorators()
    {
        return count($this->__get('_decorators'))?true:false;
    }   
    
    public function applyDecorations($content)
    {
        if (!count($this->__get('_decorators')))
            return $content;
        foreach ($this->__get('_decorators') as $decorator) {
            $content = $decorator->decorate($content);
        }
        return $content;
    }
    
    public function renderAttributes()
    {
        $attrs = "";
        foreach ($this->__get('_attributes') as $key => $value){
            $attrs .= "{$key}='{$value}' ";
        }
        return $attrs;
    }
    
    public function render()
    {
        return $this->applyDecorations($this->renderElement());
    }
    
    public function getErrors()
    {
        return $this->__get('_validationErrors');
    }
    
}