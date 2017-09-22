<?php

use Willibert\Abstraction\Person;
use Willibert\Address;

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
	
	9public function getSurName()
	{
		return $this->surname;
	}
	
	public function setSurName($surname)
	{
        $this->surname = $surname;
	}
	
	public function map(array $data)
	{
		$this->name    = $data['name'];
		$this->surname = $data['surname'];
        if($data['address'])
        {
        	$this->address = new Address;
        	$this->address->map(
        	                    $data['address‘]
        	                    );
        }
	}
}
