<?php

use Willibert\Abstract\Document;

namespace Willibert\Document;

class Quotation extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
