<?php
/**
 * Describes a form decorator class
 * 
 * PHP version 5.4
 * 
 * @category Decorators
 * @package  Decorators_UI
 * @author   Gopkalo Mykyta <yagmikita@gmail.com>
 * @license  GNU GPL
 * @link     http://192.168.7.101/docs/decorators/ui/
 */

namespace NG\Decorators\UI;

use NG\Prototypes\Abstracts as A,
    NG\Types as TE;

/**
 * Standart html form decorator, which covers the content
 * of the form in <form></form> tags with parameters
 * 
 * @category Decorators
 * @package  Decorators_UI
 * @author   Gopkalo Mykyta <yagmikita@gmail.com>
 * @license  GNU GPL
 * @link     http://192.168.7.101/docs/decorators/ui/form/
 */
class Form extends A\UIDecoratorAbstract
{
    /**
     * Decorators constructor
     * 
     * @param array  $params
     * @param String $decoration
     */
    public function __construct(
        array $params,
        String $decoration = null
    )
    {
        parent::__construct($params);
        $this->__set(
            '_pattern',
            '<form id="%s" name="%s" action="%s" method="%s" enctype="%s">%s</form>'
        );        
        $this->__set(
            '_decoration',
            is_null($decoration)?(new TE\String($this->__get('_pattern'))):$decoration
        );
    }
    
    /**
     * Interface method that performs decorstion
     * 
     * @return string
     */
    public function decorate(TE\String $poition)
    {
        return sprintf(
            $this->__get('_decoration'),
            $this->__get('_params')['id'],
            $this->__get('_params')['name'],
            $this->__get('_params')['action'],
            $this->__get('_params')['method'],
            $this->__get('_params')['enctype'],
            $poition
        );
    }
    
}