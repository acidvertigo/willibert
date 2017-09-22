<?php

use Willibert\Abstraction\Document;

namespace Willibert\Document;

class Invoice extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		
	}
}
