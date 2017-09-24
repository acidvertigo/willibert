<?php

use Willibert\Abstraction\Person;
use Willibert\Location\Address;

namespace Willibert\Person;

class Customer extends Person;
{
	public function __construct($id)
	{
		$this->id = $id;
	}

	public function map($data)
	{
		foreach($data as $key => $value)
		{
		    $this->$key = $value;
		}
	}
	
	public function getProperty($property)
	{
		return $this->$property;
	}
}
