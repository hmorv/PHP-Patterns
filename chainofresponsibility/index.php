<?php

abstract class HomeChecker
{
	protected $successor;

	public abstract function check(HomeStatus $home);

	public function setSuccessor(HomeChecker $successor)
	{
		$this->successor = $successor;
	}

	public function next(HomeStatus $home)
	{
		if($this->successor) {
			$this->successor->check($home);
		}
	}
}

class Locks extends HomeChecker
{
	public function check(HomeStatus $home)
	{
		if (! $home->locked) {
			throw new Exception ('The doors are not locked.');
		}

		$this->next($home);
	}
}

class Lights extends HomeChecker
{
	public function check(HomeStatus $home)
	{
		if (! $home->lightsOff) {
			throw new Exception('Lights are not off');
		}

		$this->next($home);
	}
}

class Alarm extends HomeChecker
{
	public function check(HomeStatus $home)
	{
		if (! $home->alarmOn) {
			throw new Exception('Alarm is off');
		}

		$this->next($home);
	}
}

class HomeStatus
{
	public $alarmOn = true;
	public $locked = true;
	public $lightsOff = true;
}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->setSuccessor($lights);
$lights->setSuccessor($alarm);

//	Start them!
$locks->check(new HomeStatus);