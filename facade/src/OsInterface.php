<?php namespace App;

interface OsInterface
{
	public function halt();
	public function getName() : string;
}