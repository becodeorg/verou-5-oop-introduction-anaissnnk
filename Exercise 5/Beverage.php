<?php

declare(strict_types=1);

class Beverage
{
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }
    public function determinePrice() {
        return $this->price;
    }
    public function getInfo() {
        return "This beverage is $this->temperature and $this->color";
    }
}
