<?php

namespace NG\Prototypes\Abstracts;

use NG\Traits as T,
    NG\Prototypes\Interfaces as I,
    NG\Application\Exceptions\TypeException as TypeException;

abstract class DecoratorAbstract implements I\DecoratorInterface
{
    use T\magicGet, T\magicSet;
    
    /**
     * The decoration that will be rendered to decorat the 'target'
     * @var I\RenderableInterface || string
     */
    protected $_decoration;
    /**
     * The object that is going to be decorated
     * @var I\HasDecoratorsInterface 
     */
    protected $_target;
    /**
     * The way the target will be decorated
     * @var enum(before|wrap|after)
     */
    protected $_mode;
    
    public function __construct(array $params)
    {
        $this->setDecoration($params['decoration']);
        $this->setTarget($params['target']);
        $this->setMode($params['before']);
    }
    
    public function setMode($mode)
    {
        $permittedModes = array('before', 'wrap', 'after');
        if (!in_array($mode, $permittedModes))
            throw new TypeException('Mode must be the member of the String rowset = [before, wrap, after]');
        $this->__set('_mode', $mode);
    }
    
    public function getMode()
    {
        return $this->__get('_mode');
    }
    
    public function setDecoration($decoration)
    {
        if (!(($decoration instanceof I\RenderableInterface) || is_string($decoration)))
            throw new TypeException('Wrong decorational pattern type'); 
        if (!$this->isDecorationValid())
            throw new FormatException('Wrong decoration string format. String {target} template must be presented');
        $this->__set('_decoration', $decoration);
    }
    
    public function getDecoration()
    {
        return $this->__get('_decoration');
    }
    
    public function setTarget(I\HasDecoratorsInterface $target)
    {
        $this->__set('_target', $target);
    }
    
    public function getTarget()
    {
        return $this->__get('_target');
    }
    
    protected function isDecorationValid()
    {
        return preg_match('/{target}/i', $this->__get('_decoration'));
    }
    
    public function getDecorationStrategy()
    {
        switch ($this->__get('_mode')) {
            case 'before':
                return '{decoration}{target}';
            break;
            case 'wrap':
                return $this->__get('_decoration');
            break;
            case 'after':
                return '{target}{decoration}';
            break;
            default:
                return '{decoration}{target}';
        }
    }
    
    public function applyDecorationStrategy($strategy, $context)
    {
        
    }
    
    public function decorate()
    {
        $decoration = $this->__get('_decoration');
        if ($decoration instanceof I\RenderableInterface) {
            return $decoration->render();
        } else {
            if (!is_array($params))
                throw new TypeException('Wrong pattern parameters type. Must be array');
            return vsnriptf($pattern, $params);
        }
    }
    
}