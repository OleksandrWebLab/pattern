<?php namespace PopcornPHP\Pattern\ObjectPool;

class Factory {
    protected static $products = [];

    public static function pushProduct(Product $product) {
        self::$products[$product->getId()] = $product;
    }

    public static function getProduct($id) {
        return isset(self::$products[$id]) ? self::$products[$id] : null;
    }

    public static function removeProduct($id) {
        if (isset(self::$products[$id])) {
            unset(self::$products[$id]);
        }
    }
}