<?php

namespace Willibert\Abstract;

abstract class Collection
{
    protected $id;
    
    public function getId()
    {
    	return $this->id;
    }
}
