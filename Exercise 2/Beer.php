<?php

declare(strict_types=1);

require_once "../Exercise 1/Beverage.php";

class Beer extends Beverage {
    public $name;
    public $alcoholPercentage;
    public function __construct (string $color, float $price, string $temperature, string $name, float $alcoholpercentage)
    {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholpercentage;
    }
    public function getAlcoholPercentage() {
        return $this->alcoholPercentage;
    }
}

$duvel = new Beer("blond", 3.5, " ", "Duvel", 8.5);
$duvel->getInfo();
echo "<br>";
$duvel->getAlcoholPercentage();
echo "<br>";
echo "The color is $duvel->color";
