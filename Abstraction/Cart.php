<?php

/***********************************************
 * Shopping cart abstraction.
 **********************************************/
namespace Willibert\Abstraction;

abstract class Cart
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
	
	/* map one array to object properties */
	abstract public function map(array $data);
}
