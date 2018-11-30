<?php

class Singleton
{
	private static $instance;

	private function __construct()
	{
		var_dump(__CLASS__ .' instance running');
	}

	public static function getInstance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new Singleton;
		}

		return self::$instance;
	}
}