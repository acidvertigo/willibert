<?php

namespace Willibert\Abstract;

abstract class Collection implements \Countable
{
    protected $id;
    protected $items
    
    public function getId()
    {
    	return $this->id;
    }
}
