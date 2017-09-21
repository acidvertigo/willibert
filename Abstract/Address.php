<?php

namespace Willibert\Abstract;

abstract class Address
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
}

class AddressFacotory
{
	public function create()
	{
		return new Address();
	}
}
