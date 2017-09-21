<?php

namespace Willibert\Abstract;

abstract class Person
{
	private   $id;
	protected $name;
	protected $surname;

	public function getId()
	{
		return $this->id;
	}
	
	abstract function getName();
	
	abstract function getSurname();
}
