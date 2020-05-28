<?php

namespace SimpleFactory\Factories;

use SimpleFactory\Destinations\{Beach, Wood};

class DestinationFactory
{
	public function createBeach(): Beach
	{
		return new Beach();
	}
	public function createWood(): Wood
	{
		return new Wood();
	}
}