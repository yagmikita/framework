<?php
/**
 * Describes a form user interface abstract decorator class
 * 
 * PHP version 5.4
 * 
 * @category Decorators
 * @package  Decorators_UI
 * @author   Gopkalo Mykyta <yagmikita@gmail.com>
 * @license  GNU GPL
 * @link     http://192.168.7.101/docs/decorators/ui/
 */

namespace NG\Prototypes\Abstracts;

use NG\Prototypes\Interfaces as I;

/**
 * Abstract user interface decorator class, differs from
 * a regular decorator by the existence of $_pattern field
 * 
 * @category Decorators
 * @package  Decorators_U
 * @author   Gopkalo Mykyta <yagmikita@gmail.com>
 * @license  GNU GPL
 * @link     http://192.168.7.101/docs/decorators/ui/form/
 */
abstract class UIDecoratorAbstract extends I\DecoratorInterface
{
    /**
     * Defines the decoration mode
     * @var enum(before|wrap|after)
     */
    protected $_mode;
    
    /**
     * Defines the parretn for the decorator to be rendered with
     * @var string
     */
    protected $_pattern;
}