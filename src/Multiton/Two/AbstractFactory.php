<?php namespace PopcornPHP\Pattern\Multiton\Two;

abstract class AbstractFactory {
    protected static $instances = [];

    public static function getInstance() {
        $className = static::getClassName();
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new $className();
        }

        return self::$instances[$className];
    }

    public static function removeInstance() {
        $className = static::getClassName();
        if (isset(self::$instances[$className])) {
            unset(self::$instances[$className]);
        }
    }

    final protected static function getClassName() {
        return get_called_class();
    }

    protected function __construct() {
    }

    final protected function __clone() {
    }

    final protected function __sleep() {
    }

    final protected function __wakeup() {
    }
}