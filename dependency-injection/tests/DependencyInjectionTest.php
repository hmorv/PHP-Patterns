<?php namespace Tests;

use App\DatabaseConfiguration;
use App\DatabaseConnection;
use PHPUnit\Framework\TestCase;

require '../vendor/autoload.php';

class DependencyInjectionTest extends TestCase
{
	public function testDependencyInjection()
	{
		$config = new DatabaseConfiguration('localhost', 3306, 'homestead', 'secret');
		$connection = new DatabaseConnection($config);

		$this->assertEquals('homestead:secret@localhost:3306', $connection->getDsn());
	}
}