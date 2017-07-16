<?php namespace PopcornPHP\Pattern\LazyInitialization;

class FirstProduct implements InterfaceProduct
{
    public function getName()
    {
        return 'First product';
    }
}