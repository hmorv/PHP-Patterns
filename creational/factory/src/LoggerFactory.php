<?php namespace App;

interface LoggerFactory
{
	public function createLogger() : Logger;
}