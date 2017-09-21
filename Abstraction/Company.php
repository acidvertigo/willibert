<?php

namespace Willibert\Abstraction;

abstract class Company
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
}
