<?php

namespace SimpleFactory\Vehicles;

use SimpleFactory\DrivableInterface;

class Aircraft implements DrivableInterface
{
	public function driveTo(string $destination): string
	{
		return "Flying to $destination";
	}
} 