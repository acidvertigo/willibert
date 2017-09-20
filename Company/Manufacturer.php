<?php

use Willibert\Abstract\Company;

namespace Willibert\Company;

class Manufacturer extends Company;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
}
