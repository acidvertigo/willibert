<?php

namespace Willibert\Abstraction;

abstract class Item
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
}
