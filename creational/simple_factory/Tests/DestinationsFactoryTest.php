<?php

namespace SimpleFactory\Tests;

use PHPUnit\Framework\TestCase;
use SimpleFactory\Destinations\{Beach, Wood};
use SimpleFactory\Factories\DestinationFactory;

class DestinationsFactoryTest extends TestCase
{
	public function testCanCreateBeach()
	{
		$beach = (new DestinationFactory())->createBeach();
		$this->assertInstanceOf(Beach::class, $beach);
	}
	public function testCanCreateWood()
	{
		$wood = (new DestinationFactory())->createWood();
		$this->assertInstanceOf(Wood::class, $wood);
	}
}