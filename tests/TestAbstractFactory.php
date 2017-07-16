<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\AbstractFactory\AbstractFactory;
use PopcornPHP\Pattern\AbstractFactory\Config;

class TestAbstractFactory extends TestCase
{
    public function testAbstractFactoryPattern()
    {
        $firstProduct = AbstractFactory::getFactory()->getProduct();
        Config::$factory = 2;
        $secondProduct = AbstractFactory::getFactory()->getProduct();

        $this->assertEquals('The product from the first factory', $firstProduct->getName());
        $this->assertEquals('The product from the second factory', $secondProduct->getName());
    }
}