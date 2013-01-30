<?php

namespace NGTest\Application;

use NGTest\Common\TestCase;

class RequestTest extends TestCase
{
    protected $request;
    
    public function setUp()
    {
        parent::setUp();
    }
    
    public function tearDown()
    {
        parent::tearDown();
    }
    
    public function testSmth()
    {
        $this->assertTrue(1==1);
    }
    
}