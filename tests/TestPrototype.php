<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\Prototype\Factory;
use PopcornPHP\Pattern\Prototype\Product;

class TestPrototype extends TestCase
{
    public function testPrototypePattern()
    {
        $prototypeFactory = new Factory(new Product());

        $firstProduct = $prototypeFactory->getProduct();
        $firstProduct->name = 'First product';

        $secondProduct = $prototypeFactory->getProduct();
        $secondProduct->name = 'Second product';

        $this->assertEquals('First product', $firstProduct->name);
        $this->assertEquals('Second product', $secondProduct->name);
    }
}