<?php namespace PopcornPHP\Pattern\Builder;

abstract class AbstractBuilder
{
    protected $product;

    final public function getProduct()
    {
        return $this->product;
    }

    public function buildProduct()
    {
        $this->product = new Product();
    }
}