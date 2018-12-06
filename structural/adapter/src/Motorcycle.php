<?php namespace App;

use App\iMoto;

class Motorcycle implements iMoto
{
	public function turnOnMoto()
	{
		var_dump('turning on the motorcycle');
	}

	public function parkMoto()
	{
		var_dump('parking the motorcycle');
	}
}