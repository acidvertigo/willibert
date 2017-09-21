<?php

namespace Willibert\Abstraction;

abstract class Collection implements \Countable, \IteratorAggregate, 
{
    protected $id;
    protected $items
    
    public function getId()
    {
    	return $this->id;
    }
    
    abstract public function get();
    abstract public function getAll();
    abstract public function add($key, $value);    
    abstract public function remove();
}
