<?php namespace App;

use App\iVehicle;

class Car implements iVehicle
{
	public function start()
	{
		var_dump('starting the car');
	}

	public function park()
	{
		var_dump('Parking the car');
	}
}