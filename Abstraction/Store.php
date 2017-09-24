<?php

/***********************************************
 * Store abstraction.
 **********************************************/
namespace Willibert\Abstraction;

abstract class Store
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
	
	/* map one array to object properties */
	abstract public function map(array $data);
}
