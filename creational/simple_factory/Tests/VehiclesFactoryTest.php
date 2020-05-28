<?php

namespace SimpleFactory\Tests;

use SimpleFactory\Vehicles\{Car, Ship, Bicycle, Aircraft};
use PHPUnit\Framework\TestCase;
use SimpleFactory\Factories\SimpleFactory;

class VehiclesFactoryTest extends TestCase
{
	public function testCanCreateBicycle()
	{
		$bicycle = (new SimpleFactory())->createBicycle();
		$this->assertInstanceOf(Bicycle::class, $bicycle);
	}
	public function testCanCreateCar()
	{
		$car = (new SimpleFactory())->createCar();
		$this->assertInstanceOf(Car::class, $car);
	}
	public function testCanCreateAircraft()
	{
		$aircraft = (new SimpleFactory())->createAircraft();
		$this->assertInstanceOf(Aircraft::class, $aircraft);
	}
	public function testCanCreateShip()
	{
		$ship = (new SimpleFactory())->createShip();
		$this->assertInstanceOf(Ship::class, $ship);
	}
}
