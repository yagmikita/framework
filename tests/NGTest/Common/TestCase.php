<?php

namespace NGTest\Common;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
        defined('DEBUG_MODE') || define('DEBUG_MODE', FALSE);
    }
    
    public function tearDown()
    {
        parent::tearDown();
    }
    
    
}