<?php namespace PopcornPHP\Pattern\Prototype;

class Factory
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return clone $this->product;
    }
}