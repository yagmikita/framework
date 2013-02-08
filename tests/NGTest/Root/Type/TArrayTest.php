<?php

namespace NGTest\Root\Type;

use NGTest,
    NG\Root\Type,
    NG\Root\Exception;

class TArrayTest extends \NGTest\TestCase
{
    public $array;
    
    public function goodValues()
    {
        return array(
            array(
                array('')
            ),
            array(
                array(1, 2, 3)
            ),
            array(
                array('234', 'test', 234, 99, 100.54)
            )
        );
    }
    
    public function badValues()
    {
        return array(
            array(11),
            array('test'),
            array(23.23)
        );
    }
 
    /**
     * @dataProvider goodValues
     */
    public function testCreateSuccess($ar)
    {
        $ta = new \NG\Root\Type\TArray($ar);
        $this->assertTrue($ta instanceof \NG\Root\Type\TArray);
        $this->assertTrue($ta->length() == count($ar));
    }
    
    public function testNoElements()
    {
        $ta = new \NG\Root\Type\TArray();
        $this->assertTrue($ta->length()==0);
        $ta = new \NG\Root\Type\TArray(null);
        $this->assertTrue($ta->length()==0);
    }
    
    /**
     * @dataProvider badValues
     * @expectedException \NG\Root\Exception\TypeException
     */
    public function testCreateFails($ar)
    {
        $ta = new \NG\Root\Type\TArray($ar);
    }

    /**
     * @dataProvider goodValues
     */
    public function testImplodeWorks(array $ar)
    {
        $ta = new \NG\Root\Type\TArray($ar);
        $this->assertTrue($ta->implode() instanceof \NG\Root\Type\TString);
    }
    
}