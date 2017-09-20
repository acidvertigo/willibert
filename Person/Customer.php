<?php

use Willibert\Abstract\Person;

namespace Willibert\Person;

class Customer extends Person;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
