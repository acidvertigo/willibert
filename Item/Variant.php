<?php

use Willibert\Abstract\Item;

namespace Willibert\Item;

class Variant extends Item;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
