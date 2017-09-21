<?php

namespace Willibert\Abstract;

abstract class Document
{
	protected $id;

	public function getId()
	{
		return $this->id;
	}
}
