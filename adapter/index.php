<?php

require 'vendor/autoload.php';

use App\iVehicle;
use App\Car;
use App\Motorcycle;
use App\MotorcycleAdapter;

class Driver
{
	private $vehicle;

	public function drive(iVehicle $vehicle)
	{
		$vehicle->start();
		$vehicle->park();
	}
}

(new Driver)->drive(new MotorcycleAdapter(new Motorcycle));
(new Driver)->drive(new Car);