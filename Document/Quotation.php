<?php

use Willibert\Abstraction\Document;

namespace Willibert\Document;

class Quotation extends Document;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function map(array $data)
	{
		foreach($data as $key => $value)
		{
		    $this->$key = $value;
		}
	}
}
