<?php namespace PopcornPHP\Pattern\Singleton;

final class Product
{
    public $var;

    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}