<?php

class Customer
{
	public function isGold()
	{
		return $this->type == 'gold';
	}
}