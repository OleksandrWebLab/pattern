<?php namespace PopcornPHP\Pattern\AbstractFactory;

use Exception;

abstract class AbstractFactory
{
    public static function getFactory()
    {
        switch (Config::$factory) {
            case 1:
                return new FirstFactory();
            case 2:
                return new SecondFactory();
        }

        throw new Exception('Bad config');
    }

    abstract public function getProduct();
}