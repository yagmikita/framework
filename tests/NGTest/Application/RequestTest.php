<?php

namespace Tests\Library;

use Tests,
    Application;

class RequestTest extends Tests\TestCase
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