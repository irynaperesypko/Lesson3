<?php


class Primera extends Nissan
{
    private int $discount;

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    public function exponentiation($x, $y)
    {
        return pow($x, $y);
    }

    public function salePrice()
    {
        return $this->getBasePrice() * $this->getRate() /$this->getDiscount();
    }
}
