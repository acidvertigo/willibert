<?php

/***********************************************
 * Item abstraction.
 **********************************************/
namespace Willibert\Abstraction;

abstract class Item
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
	
	/* map one array to obkect properties */
	abstract public function map(array $data);
}
