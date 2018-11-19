<?php namespace App;

use App\Sandwich;

class Bacon extends Sandwich
{
	public function addPrimaryToppings()
	{
		var_dump('add some bacon');

		return $this;
	}
}