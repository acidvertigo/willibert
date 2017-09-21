<?php

use Willibert\Abstraction\Person;

namespace Willibert\Person;

class Customer extends Person;
{
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
        $this->name = $name;
	}
	
	public function getSurName()
	{
		return $this->surname;
	}
	
	public function setSurName($surname)
	{
        $this->surname = $surname;
	}
}
