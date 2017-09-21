<?php

namespace Willibert\Abstract;

abstract class Item
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
}
