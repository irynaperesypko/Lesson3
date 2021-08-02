<?php


class Car
{
    private string $model;
    private int $basePrice = 10000;

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int|null
     */
    public function getBasePrice(): ?int
    {
        return $this->basePrice;
    }

    /**
     * @param int $basePrice
     */
    public function setBasePrice(int $basePrice): void
    {
        $this->basePrice = $basePrice;
    }

}



