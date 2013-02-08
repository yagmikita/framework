<?php

namespace NGTest\Root\Exception;

use NGTest,
    NG\Root\Prorotype,
    NG\Root\Exception;

class CodeExceptionTest extends NGTest\TestCase
{ 
    public function testValidExceptionIsCreated()
    {
        $e = new \NG\Root\Exception\CodeException(__CLASS__, __METHOD__);
        $this->assertTrue($e->getCode() == 500);
        $this->assertTrue($e->getMessage() == __CLASS__ . " :: " . __METHOD__ . "() => source code execution fails");
    }
    
}