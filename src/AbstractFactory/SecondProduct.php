<?php namespace PopcornPHP\Pattern\AbstractFactory;

class SecondProduct implements InterfaceProduct
{
    public function getName()
    {
        return 'The product from second factory';
    }
}