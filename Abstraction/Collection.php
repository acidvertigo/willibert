<?php

namespace Willibert\Abstraction;

abstract class Collection implements \Countable
{
    protected $id;
    protected $items
    
    public function getId()
    {
    	return $this->id;
    }
}
