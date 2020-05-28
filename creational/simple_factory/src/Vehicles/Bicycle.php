<?php declare(strict_types=1);

namespace SimpleFactory\Vehicles;

use SimpleFactory\DrivableInterface;

class Bicycle implements DrivableInterface
{
	public function driveTo(string $destination): string
	{
		return "Driding to $destination\n";
	}
}