<?php

declare(strict_types=1);

require_once "Beverage.php";

$cola = new Beverage("black", 3.50, "");
echo $cola->getInfo() ."<br>";
echo "The price is " . $cola->determinePrice();