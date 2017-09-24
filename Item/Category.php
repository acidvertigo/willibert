<?php

use Willibert\Abstraction\Item;

namespace Willibert\Item;

class Category extends Item;
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
