<?php namespace App;

class StdoutLogger implements Logger
{
	public function log(string $message)
	{
		echo $message;
	}
}