<?php

namespace SimpleFactory\Interfaces;

interface DrivableInterface
{
	public function driveTo(string $destination): string;
}