<?php namespace PopcornPHP\Pattern\Multiton\Two;

abstract class AbstractRegistryFactory extends AbstractFactory
{
    final public static function getInstance($id)
    {
        $className = static::getClassName();

        if (isset(self::$instances[$className])) {
            if (!isset(self::$instances[$className][$id])) {
                self::$instances[$className][$id] = new $className($id);
            }
        } else {
            self::$instances[$className] = [
                $id => new $className($id),
            ];
        }

        return self::$instances[$className][$id];
    }

    final public static function removeInstance($id = null)
    {
        $className = static::getClassName();

        if (isset(self::$instances[$className])) {
            if (is_null($id)) {
                unset(self::$instances[$className]);
            } else {
                if (isset(self::$instances[$className][$id])) {
                    unset(self::$instances[$className][$id]);
                }
                if (empty(self::$instances[$className])) {
                    unset(self::$instances[$className]);
                }
            }
        }
    }

    protected function __construct($id)
    {
    }
}