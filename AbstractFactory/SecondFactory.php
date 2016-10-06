<?php namespace PopcornPHP\Pattern\AbstractFactory;

class SecondFactory extends AbstractFactory {
    public function getProduct() {
        return new SecondProduct();
    }
}