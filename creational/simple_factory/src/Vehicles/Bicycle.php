<?php declare(strict_types=1);

namespace SimpleFactory\Vehicles;

use SimpleFactory\Interfaces\DrivableInterface;

class Bicycle implements DrivableInterface
{
	public function driveTo(string $destination): string
	{
		return "Driving to $destination\n";
	}
}