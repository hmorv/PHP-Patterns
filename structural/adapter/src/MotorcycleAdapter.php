<?php namespace App;

/**
This creates an adapter that implements the interface that you're trying to adapt
Then inject the class and translate the original interface methods over the new ones
The consumer will be able to consume a format that wasn't originally supported.
*/

class MotorcycleAdapter implements iVehicle
{
	private $motorcycle;
	//	This class will allow two interfaces to communicate (iVehicle, iMoto)
	public function __construct(Motorcycle $motorcycle)
	{
		$this->motorcycle = $motorcycle;
	}

	public function start()
	{
		$this->motorcycle->turnOnMoto();
	}

	public function park()
	{
		$this->motorcycle->parkMoto();
	}
}