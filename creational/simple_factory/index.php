<?php

namespace SimpleFactory;
use SimpleFactory\Vehicles\Bicycle;
use SimpleFactory\SimpleFactory;
require './vendor/autoload.php';
$sf = new SimpleFactory;
$bicycle = (new SimpleFactory())->createBicycle();
echo $bicycle->driveTo('London');