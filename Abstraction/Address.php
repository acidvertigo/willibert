<?php

namespace Willibert\Abstraction;

abstract class Address
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
}

