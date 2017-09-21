<?php

use Willibert\Abstraction\Document;

namespace Willibert\Document;

class Order extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
