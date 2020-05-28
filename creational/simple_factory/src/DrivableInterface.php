<?php

namespace SimpleFactory;

interface DrivableInterface
{
	public function driveTo(string $destination): string;
}