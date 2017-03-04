<?php namespace PopcornPHP\Pattern\LazyInitialization;

class Factory
{
    protected $firstProduct;
    protected $secondProduct;

    public function getFirstProduct()
    {
        if (!$this->firstProduct) {
            $this->firstProduct = new FirstProduct();
        }

        return $this->firstProduct;
    }

    public function getSecondProduct()
    {
        if (!$this->secondProduct) {
            $this->secondProduct = new SecondProduct();
        }

        return $this->secondProduct;
    }
}
