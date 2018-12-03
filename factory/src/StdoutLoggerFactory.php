<?php namespace App;

class StdoutLoggerFactory implements LoggerFactory
{
	public function createLogger(): Logger
	{
		return new StdoutLogger();
	}
}