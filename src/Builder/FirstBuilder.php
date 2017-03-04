<?php namespace PopcornPHP\Pattern\Builder;

class FirstBuilder extends AbstractBuilder
{
    public function buildProduct()
    {
        parent::buildProduct();
        $this->product->setName('The product of the first builder');
    }
}