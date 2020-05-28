<?php

namespace SimpleFactory\Vehicles;

use SimpleFactory\Interfaces\DrivableInterface;

class Ship implements DrivableInterface
{
	public function driveTo(string $destination): string
	{
		return "Sailing to $destination\n";
	}
}