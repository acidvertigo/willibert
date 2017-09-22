<?php

namespace Willibert\Abstraction;

abstract class Person
{
	protected $id;
	protected $name;
	protected $surname;
	protected $address;

	public function getId()
	{
		return $this->id;
	}
	
	abstract public function getName();	
	abstract public function getSurname();
	abstract public function map(array $data);
}
