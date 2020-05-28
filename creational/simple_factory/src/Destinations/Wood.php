<?php

namespace SimpleFactory\Destinations;

use SimpleFactory\Interfaces\LocationInterface;

class Wood implements LocationInterface
{
	public function describe(): string
	{
		return "You are in a wood\n";
	}
}