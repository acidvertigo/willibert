<?php

use Willibert\Abstraction\Document;

namespace Willibert\Document;

class PackingSlip extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
