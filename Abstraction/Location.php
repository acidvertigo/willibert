<?php

/***********************************************
 * Location abstraction.
 **********************************************/
namespace Willibert\Abstraction;

abstract class Location
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
	
	abstract public function map(array $data);
}

