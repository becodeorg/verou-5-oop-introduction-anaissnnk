<?php

declare(strict_types=1);

class Beverage
{
    // Properties
    private $color;
    private $price;
    private $temperature;

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

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/