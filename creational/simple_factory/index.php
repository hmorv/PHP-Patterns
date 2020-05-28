<?php

namespace SimpleFactory;

use SimpleFactory\Vehicles\Bicycle;
use SimpleFactory\Destinations\Wood;
use SimpleFactory\Factories\SimpleFactory;
use SimpleFactory\Factories\DestinationFactory;
require './vendor/autoload.php';
$sf = new SimpleFactory;
$bicycle = (new SimpleFactory())->createBicycle();
$wood = (new DestinationFactory())->createWood();
echo $bicycle->driveTo('London');
echo $wood->describe();