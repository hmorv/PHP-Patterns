<?php namespace App;

/**
This will remove all duplicates (if not, Bacon & Vegetal classes will define same methods but one)
*/

abstract class Sandwich
{
	public function make()
	{
		return $this
			->layBread()
			->addLettuce()
			->addPrimaryToppings()
			->addSauces();
	}

	protected function layBread() : Sandwich
	{
		var_dump('laying down the bread');

		return $this;
	}

	protected function addLettuce() : Sandwich
	{
		var_dump('add some lettuce');

		return $this;
	}

	protected function addSauces() : Sandwich
	{
		var_dump('add some oil and vinegar');

		return $this;
	}

	public abstract function addPrimaryToppings();
}