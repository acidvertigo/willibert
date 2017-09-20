<?php

use Willibert\Abstract\Person;

namespace Willibert\Document;

class Order extends Person;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
