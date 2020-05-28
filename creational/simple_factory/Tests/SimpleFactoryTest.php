<?php

namespace SimpleFactory\Tests;

use SimpleFactory\Vehicles\Car;
use SimpleFactory\Vehicles\Bicycle;
use SimpleFactory\Vehicles\Aircraft;
use PHPUnit\Framework\TestCase;
use SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase
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
}
