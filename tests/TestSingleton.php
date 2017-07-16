<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\Singleton\Product;

class TestSingleton extends TestCase
{
    public function testSingletonPattern()
    {
        $firstProduct = Product::getInstance();
        $secondProduct = Product::getInstance();

        $firstProduct->a = 1;
        $secondProduct->a = 2;

        $this->assertEquals(2, $firstProduct->a);
    }
}