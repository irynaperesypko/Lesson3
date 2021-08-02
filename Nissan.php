<?php


abstract class Nissan extends Car
{
    private float $rate = 1.2;
    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }

    public function getPrice()
    {
        return $this->getBasePrice()*$this->getRate();
    }
    abstract public function exponentiation($x,$y);
}