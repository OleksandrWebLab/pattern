<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\Builder\Factory;
use PopcornPHP\Pattern\Builder\FirstBuilder;
use PopcornPHP\Pattern\Builder\SecondBuilder;

class TestBuilder extends TestCase
{
    public function testBuilderPattern()
    {
        $firstDirector = new Factory(new FirstBuilder());
        $secondDirector = new Factory(new SecondBuilder());

        $this->assertEquals('The product of the first builder', $firstDirector->getProduct()->getName());
        $this->assertEquals('The product of the second builder', $secondDirector->getProduct()->getName());
    }
}