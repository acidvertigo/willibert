<?php

use Willibert\Abstraction\Cart;

namespace Willibert\Cart;

class ShoppingCart extends Cart;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		foreach($data as $key => $value)
		{
		    $this->$key = $value;
		}
	}
}
