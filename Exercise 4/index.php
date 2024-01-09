<?php

declare(strict_types=1);

require_once "../Exercise 1/Beverage.php";

class Beer extends Beverage {
    protected $name;
    protected $alcoholPercentage;
    public function __construct (string $color, float $price, string $temperature, string $name, float $alcoholpercentage)
    {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholpercentage;
    }
    public function getAlcoholPercentage() {
        return $this->alcoholPercentage;
    }
    private function beerInfo() {
        return "Hi, I'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have $this->color color";
    }
    public function displayBeerInfo() {
        return $this->beerInfo();
    }
}

$duvel = new Beer("light", 3.5, " ", "Duvel", 8.5);
$duvel->getInfo();
echo "<br>";
$duvel->getAlcoholPercentage();
echo "<br>";
echo "The color is " . $duvel->getColor();
echo "<br>";
$duvel->displayBeerInfo();
