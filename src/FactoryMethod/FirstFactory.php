<?php namespace PopcornPHP\Pattern\FactoryMethod;

class FirstFactory implements InterfaceFactory {
    public function getProduct() {
        return new FirstProduct();
    }
}