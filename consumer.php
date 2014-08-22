<?php

require_once("mycars.phar");

use MyCars\BasicCar;

$car = new BasicCar("Tesla", "Model S", "silver");

$car->drive(20);
$car->stop();
$car->drive();
echo $car;
