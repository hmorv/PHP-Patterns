<?php

class Singleton
{
	private static $instance = null;

	private function __construct()
	{
		var_dump(__CLASS__ .' instance running');
	}

	public static function getInstance()
	{
		if (self::$instance == null) {
			self::$instance = new Singleton;
		}

		return self::$instance;
	}
}