<?php

use Willibert\Abstraction\Address;

namespace Willibert\Address;

class Phone extends Address;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
