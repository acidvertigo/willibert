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
	
	public function map(array $data)
	{
		$this->name    = $data['name'];
		$this->surname = $data['surname'];
        if($data['address'])
        {
        	$this->address = new Address;
        	$this->address->map(
        	                    $data['address']
        	                    );
        }
	}
	
	public getDob()
	{
		return $this->dob;
	}
	
	public setDob($dob)
	{
	    $this->dob = $dob;	
	}
	
	public getEmail()
	{
		return $this->email;
	}
	
	public setEmail($email)
	{
		$this->email = $email;
	}
	
	public getPhone()
	{
		return $this->telephone;
	}
	
	public setPhone($telephone)
	{
		$this->phone = $telephone;
	}
}
