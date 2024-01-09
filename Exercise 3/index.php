<?php

declare(strict_types=1);

require_once "../Exercise 1/Beverage.php";

class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;
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
        echo "Hi, I'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have $this->color";
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
echo "The color is $duvel->color";
echo "<br>";
$duvel->displayBeerInfo();