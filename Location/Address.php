<?php

use Willibert\Abstraction\Location;

namespace Willibert\Address;

class Manufacturer extends Location;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
