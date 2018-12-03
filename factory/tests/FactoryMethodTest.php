<?php namespace Tests;

require '../vendor/autoload.php';

use App\FileLogger;
use App\FileLoggerFactory;
use App\StdoutLogger;
use App\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
	public function testCanCreateStdoutLogging()
	{
		$loggerFactory = new StdoutLoggerFactory();
		$logger = $loggerFactory->createLogger();

		$this->assertInstanceOf(StdoutLogger::class, $Logger);
	}

	public function testCanCreateFileLogging()
	{
		$loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
		$logger = $loggerFactory->createLogger();

		$this->assertInstanceOf(FileLogger::class, $logger);
	}
}