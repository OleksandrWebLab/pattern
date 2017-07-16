<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\ObjectPool\Factory;
use PopcornPHP\Pattern\ObjectPool\Product;

class TestObjectPool extends TestCase
{
    public function testObjectPoolPattern()
    {
        Factory::pushProduct(new Product('first'));
        Factory::pushProduct(new Product('second'));

        $this->assertEquals('first', Factory::getProduct('first')->getId());
        $this->assertEquals('second', Factory::getProduct('second')->getId());
    }
}