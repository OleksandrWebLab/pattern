<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\Registry\Product;

class TestRegistry extends TestCase
{
    public function testRegistryPattern()
    {
        Product::set('name', 'First product');

        $this->assertEquals('First product', Product::get('name'));
    }
}