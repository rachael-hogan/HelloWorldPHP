<?php

use PHPUnit\Framework\TestCase;
use Rachaelhogan\HelloWorldPHP\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $helloWorld = new HelloWorld();
        $this->assertEquals('Hello World!', $helloWorld->sayHello('World'));
    }
}
