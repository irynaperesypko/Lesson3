<?php


final class Opel extends Car
{
    private float $rate = 0.8;

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
}
