<?php namespace App;

use App\Sandwich;

class Vegetal extends Sandwich
{
	public function addPrimaryToppings()
	{
		var_dump('add some vegetal ingredients');

		return $this;
	}
}