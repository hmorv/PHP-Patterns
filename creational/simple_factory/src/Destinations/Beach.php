<?php

namespace SimpleFactory\Destinations;

use SimpleFactory\Interfaces\LocationInterface;

class Beach implements LocationInterface
{
	public function describe(): string
	{
		return "This is a beach\n";
	}
}