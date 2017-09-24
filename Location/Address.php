<?php

use Willibert\Abstraction\Location;

namespace Willibert\Address;

class Manufacturer extends Location;
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
