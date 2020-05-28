<?php declare(strict_types=1);

namespace SimpleFactory\Factories;

use SimpleFactory\Vehicles\{Car, Aircraft, Bicycle, Ship};

class SimpleFactory
{
	public function createBicycle(): Bicycle
	{
		return new Bicycle();
	}
	public function createCar(): Car
	{
		return new Car();
	}
	public function createAircraft(): Aircraft
	{
		return new Aircraft();
	}
	public function createShip(): Ship
	{
		return new Ship();
	}
}
