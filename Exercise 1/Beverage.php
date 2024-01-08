<?php

declare(strict_types=1);

class Beverage
{
    // Properties
    public $color;
    public $price;
    public $temperature;

    //Constructor
    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color=$color;
        $this->price=$price;
        $this->temperature= "cold";
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



