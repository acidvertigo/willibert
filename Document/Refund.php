<?php

use Willibert\Abstraction\Document;

namespace Willibert\Document;

class Refund extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		
	}
}
