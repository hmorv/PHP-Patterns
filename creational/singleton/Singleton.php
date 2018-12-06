<?php

class Singleton
{
	private static $instance = null;

	private function __construct()
	{
		self::$count++;
		var_dump(__CLASS__ .' instance running.');
	}

	public static function getInstance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new Singleton;
		}

		return self::$instance;

		//	equivalent:
		//	return self::$instance = (is_null(self::$instance)) ? new Singleton : self::$instance;
	}
}