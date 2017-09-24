<?php

use Willibert\Abstraction\Store;

namespace Willibert\Store;

class Shop extends Store;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		
	}
}
