<?php

/***********************************************
 * Person abstraction.
 **********************************************/
namespace Willibert\Abstraction;

abstract class Person
{
	protected $id;
	protected $name;
	protected $surname;
	protected $address;
	protected $dob;
	protected $email;
	protected $telephone;
	protected $fax;

	public function getId()
	{
		return $this->id;
	}
	
	abstract public function getName();
	
	abstract public function getSurname();
	
	/* map one array to object properties */
	abstract public function map(array $data);
}
