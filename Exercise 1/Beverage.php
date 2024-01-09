<?php

declare(strict_types=1);

class Beverage
{
    // Properties
    protected $color;
    protected $price;
    protected $temperature;

    //Constructor
    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color=$color;
        $this->price=$price;
        $this->temperature= "cold";
    }
    public function getColor() {
        return $this->color;
    }
    public function getTemperature() {
        $this->temperature;
    }
    // Function
    public function getInfo () {
        echo "This beverage is $this->temperature and $this->color.";
        echo "<br>";
        echo "The temperature is $this->temperature.";
}
}

$cola = new Beverage("black", 2.00, "");
$cola->getInfo();



