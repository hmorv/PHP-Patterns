<?php namespace App;

use App\Logger;

class LogToDatabase implements Logger
{
	public function log($data)
	{
		var_dump('Log the data to a database');
	}
}
