<?php

namespace SimpleFactory\Vehicles;

use SimpleFactory\Interfaces\DrivableInterface;

class Car implements DrivableInterface
{
	public function driveTo(string $destination): string
	{
		return "Driving on your car to $destination\n";
	}
}