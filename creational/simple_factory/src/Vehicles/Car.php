<?php

namespace SimpleFactory\Vehicles;

use SimpleFactory\DrivableInterface;

class Car implements DrivableInterface
{
	public function driveTo(string $destination): string
	{
		return "Driving on your car to $destination";
	}
}