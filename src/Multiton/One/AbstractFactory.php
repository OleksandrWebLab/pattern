<?php namespace PopcornPHP\Pattern\Multiton\One;

abstract class AbstractFactory extends MainAbstractFactory
{
    final public static function getInstance()
    {
        return parent::getInstance();
    }

    final public static function removeInstance()
    {
        parent::removeInstance();
    }
}