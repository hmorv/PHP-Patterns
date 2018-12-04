<?php namespace Tests;

use App\Facade;
use App\OsInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
	public function testComputerOn()
	{
		$os = $this->createMock('OsInterface');

		$os->method('getName')
			->will($this->returnValue('Linux'));

		$bios = $this->getMockBuilder('BiosInterface')
			->setMethods(['launch', 'execute', 'waitForKeyPress'])
			->disableAutoload()
			->getMock();

		$bios->expects($this->once())
			->method('launch')
			->with($os);

		$facade = new Facade($bios, $os);

		$facade->turnOn();

		//	Access to underlying components
		$this->assertEquals('Linux', $os->getName());
	}
}