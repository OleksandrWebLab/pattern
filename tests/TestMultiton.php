<?php

use PHPUnit\Framework\TestCase;
use PopcornPHP\Pattern\Multiton\One\FirstProduct as OneFirstProduct;
use PopcornPHP\Pattern\Multiton\One\SecondProduct as OneSecondProduct;
use PopcornPHP\Pattern\Multiton\Two\FirstFactory as TwoFirstFactory;
use PopcornPHP\Pattern\Multiton\Two\SecondFactory as TwoSecondFactory;

class TestMultiton extends TestCase
{
    public function testSimpleMultitonPattern()
    {
        OneFirstProduct::getInstance()->a[] = 1;
        OneSecondProduct::getInstance()->a[] = 2;

        OneFirstProduct::getInstance()->a[] = 3;
        OneSecondProduct::getInstance()->a[] = 4;

        $this->assertArraySubset([1, 3], OneFirstProduct::getInstance()->a);
        $this->assertArraySubset([2, 4], OneSecondProduct::getInstance()->a);
    }

    public function testComplexMultitonPattern()
    {
        TwoFirstFactory::getInstance('FirstProduct')->a[] = 1;
        TwoFirstFactory::getInstance('SecondProduct')->a[] = 2;
        TwoSecondFactory::getInstance('FirstProduct')->a[] = 3;
        TwoSecondFactory::getInstance('SecondProduct')->a[] = 4;
        TwoFirstFactory::getInstance('FirstProduct')->a[] = 5;
        TwoFirstFactory::getInstance('SecondProduct')->a[] = 6;
        TwoSecondFactory::getInstance('FirstProduct')->a[] = 7;
        TwoSecondFactory::getInstance('SecondProduct')->a[] = 8;

        $this->assertArraySubset([1, 5], TwoFirstFactory::getInstance('FirstProduct')->a);
        $this->assertArraySubset([2, 6], TwoFirstFactory::getInstance('SecondProduct')->a);
        $this->assertArraySubset([3, 7], TwoSecondFactory::getInstance('FirstProduct')->a);
        $this->assertArraySubset([4, 8], TwoSecondFactory::getInstance('SecondProduct')->a);
    }
}