<?php namespace PopcornPHP\Pattern\AbstractFactory;

class FirstProduct implements InterfaceProduct {
    public function getName() {
        return 'The product from the first factory';
    }
}