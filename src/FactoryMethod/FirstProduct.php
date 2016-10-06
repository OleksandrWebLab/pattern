<?php namespace PopcornPHP\Pattern\FactoryMethod;

class FirstProduct implements InterfaceProduct {
    public function getName() {
        return 'The first product';
    }
}