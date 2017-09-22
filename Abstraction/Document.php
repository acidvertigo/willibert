<?php

namespace Willibert\Abstraction;

abstract class Document
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
	
	abstract public function map(array $data);
}
