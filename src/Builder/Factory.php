<?php namespace PopcornPHP\Pattern\Builder;

class Factory
{
    private $builder;

    public function __construct(AbstractBuilder $builder)
    {
        $this->builder = $builder;
        $this->builder->buildProduct();
    }

    public function getProduct()
    {
        return $this->builder->getProduct();
    }
}