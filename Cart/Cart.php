<?php

use Willibert\Abstraction\Company;

namespace Willibert\Company;

class Manufacturer extends Company;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		
	}
}