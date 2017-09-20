<?php

use Willibert\Abstract\Document;

namespace Willibert\Document;

class Invoice extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
