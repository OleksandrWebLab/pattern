<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\LazyInitialization\Factory;

class TestLazyInitialization extends TestCase
{
    public function testLazyInitializationPattern()
    {
        $factory = new Factory();

        $this->assertEquals('First product', $factory->getFirstProduct()->getName());
        $this->assertEquals('Second product', $factory->getSecondProduct()->getName());
        $this->assertEquals('First product', $factory->getFirstProduct()->getName());
    }
}