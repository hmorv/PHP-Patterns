<?php declare(strict_types=1);

namespace SimpleFactory;
//use SimpleFactory\DrivableInterface;
use SimpleFactory\Vehicles\{Car, Aircraft, Bicycle};
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
}
