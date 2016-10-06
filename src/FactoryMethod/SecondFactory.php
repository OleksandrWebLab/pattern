<?php namespace PopcornPHP\Pattern\FactoryMethod;

class SecondFactory implements InterfaceFactory {
    public function getProduct() {
        return new SecondProduct();
    }
}