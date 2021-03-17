<?php
require_once 'MyGreeter\client.php';

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    protected $greeter;
    public function setUp()
    {
        $this->greeter = new Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}
