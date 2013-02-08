<?php

namespace NGTest\Root\Type;

use NGTest,
    NG\Root\Type,
    NG\Root\Exception;

class TStringTest extends NGTest\TestCase
{
    public $string;
    
    public function goodValues()
    {
        return array(
            array(''),
            array('teSt TEst tesT'),
            array('234'),
            array('test 2! 3...4'),
            array('2 3 4')
        );
    }
    
    public function badValues()
    {
        return array(
            array(11),
            array(new \stdClass),
            array(23.23)
        );
    }
    
    public function camelCaseValues()
    {
        return array(
            array(' TTTest te te sst Tsfs'),
            array(' 23dasf wr34 sdfsef'),
            array('nnnjkanfn aenfoalenf0293ujr0j'),
            array('lorem ipsum dolar')
        );
    }
 
    /**
     * @dataProvider goodValues
     */
    public function testCreateSuccess($s)
    {
        $ts = new \NG\Root\Type\TString($s);
        $this->assertTrue($ts instanceof \NG\Root\Type\TString);
        $this->assertTrue($ts->length() == strlen($s));
    }
    
    public function testNoElements()
    {
        $ts = new \NG\Root\Type\TString();
        $this->assertTrue($ts->length()==0);
        $ts = new \NG\Root\Type\TString(null);
        $this->assertTrue($ts->length()==0);
    }
    
    /**
     * @dataProvider badValues
     * @expectedException \NG\Root\Exception\TypeException
     */
    public function testCreateFails($ar)
    {
        $ts = new \NG\Root\Type\TString($ar);
    }

    /**
     * @dataProvider goodValues
     */
    public function testExplodeWorks($s)
    {
        $ts = new \NG\Root\Type\TString($s);
        $this->assertTrue($ts->explode() instanceof \NG\Root\Type\TArray);
    }
    
    /**
     * @dataProvider camelCaseValues
     */
    public function testCamelCaseWorks($s)
    {
        $ts = new \NG\Root\Type\TString($s);
        $cC = $ts->toCamelCase();
        //echo $s . " => " . $cC->value();
        $this->assertTrue($cC instanceof \NG\Root\Type\TString);
        $res = preg_match('/^\s*([a-z0-9]+)(([A-Z]{1}[a-z0-9]*)+)/', $cC->value()); 
        //var_dump($cC->value());
        $this->assertTrue($res);
    }
    
}