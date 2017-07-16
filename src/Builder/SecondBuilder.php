<?php namespace PopcornPHP\Pattern\Builder;

class SecondBuilder extends AbstractBuilder
{
    public function buildProduct()
    {
        parent::buildProduct();
        $this->product->setName('The product of the second builder');
    }
}