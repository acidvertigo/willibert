<?php

use Willibert\Abstraction\Person;
use Willibert\Location\Address;

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
	
	public function getAddress($id)
	{
		return $this->address;
	}
	
	public function setAddress($address)
	{
		$this->address = $address;
	}
	
	public function map($data)
	{
		foreach($data as $key => $value)
		{
		    $this->$key = $value;
		}
	}
	
	public function getProperty($property)
	{
		return $this->$property;
	}
}
