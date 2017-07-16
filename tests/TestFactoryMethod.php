<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\FactoryMethod\FirstFactory;
use PopcornPHP\Pattern\FactoryMethod\SecondFactory;

class TestFactoryMethod extends TestCase
{
    public function testFactoryMethodPattern()
    {
        $factory = new FirstFactory();
        $firstProduct = $factory->getProduct();

        $factory = new SecondFactory();
        $secondProduct = $factory->getProduct();

        $this->assertEquals('First product', $firstProduct->getName());
        $this->assertEquals('Second product', $secondProduct->getName());
    }
}