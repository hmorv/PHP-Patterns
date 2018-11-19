<?php namespace App;

use App\Logger;
use App\LogToFile;

class App
{
	public function log($data, Logger $logger = null)
	{
		$logger = $logger ?: new LogToFile;
		$logger->log($data);
	}
}