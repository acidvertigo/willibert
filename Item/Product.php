<?php

use Willibert\Abstraction\Item;

namespace Willibert\Item;

class Product extends Item;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		
	}
}
