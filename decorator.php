<?php //decorator pattern, very useful for not growing the class tree too much

//	Interfaces
interface MainDish
{
	public function getIngredients() : string;
}
interface Caloric
{
	public function getCalories() : int;
}
interface Costable
{
	public function getBaseCost() : float;
}

//	Main interface for this example
interface iHamburger extends Caloric, Costable, MainDish {}

class Hamburger implements iHamburger
{
	protected $_baseCost = 3.5;
	protected $_calories = 289;
	protected $_ingredients = "Cooked patties of ground meat with bread roll";

	public function getBaseCost() : float
	{
		return $this->_baseCost;
	}
	public function getCalories() : int
	{
		return $this->_calories;
	}
	public function getIngredients() : string
	{
		return $this->_ingredients;
	}
}

//	Decorator
abstract class HamburgerDecorator implements iHamburger
{
	protected $_hamburger;

	public function __construct(iHamburger $Hamburger)
	{
		$this->_hamburger = $Hamburger;
	}
}

//	Some decorators
class WithExtraChesse extends HamburgerDecorator
{
	public function getBaseCost() : float
	{
		return $this->_hamburger->getBaseCost() + 0.5;
	}

	public function getCalories() : int
	{
		return $this->_hamburger->getCalories() + 180;
	}

	public function getIngredients() : string
	{
		return $this->_hamburger->getIngredients() . ", and extra cheese";
	}
}

class WithExtraBacon extends HamburgerDecorator
{
	public function getBaseCost() : float
	{
		return $this->_hamburger->getBaseCost() + 0.6;
	}
	
	public function getCalories() : int
	{
		return $this->_hamburger->getCalories() + 250;
	}

	public function getIngredients() : string
	{
		return $this->_hamburger->getIngredients() . ", and extra bacon";
	}
}

//	Prepare 2 burgers: 1 with all extras, another with only the basics
$fullhamburger = new WithExtraBacon(
	new WithExtraChesse(
		new Hamburger()
	));
$basichamburger = new Hamburger();

//	Show info
echo "The hamburger price is \${$fullhamburger->getBaseCost()}\n";
echo "Ingredients are: {$fullhamburger->getIngredients()}.\n";
echo "Total calories: {$fullhamburger->getCalories()} cal.\n";

echo "The hamburger price is \${$basichamburger->getBaseCost()}\n";
echo "Ingredients are: {$basichamburger->getIngredients()}.\n";
echo "Total calories: {$basichamburger->getCalories()} cal.\n";