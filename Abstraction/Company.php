<?php

/***********************************************
 * Company abstraction.
 **********************************************/

namespace Willibert\Abstraction;

abstract class Company
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
	
	/* map
	abstract public function map(array $data);
}
