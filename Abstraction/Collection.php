<?php

namespace Willibert\Abstraction;

abstract class Collection implements \Countable, \IteratorAggregate
{
    protected $id;
    protected $items;
    
    public function __construct($items)
    {
    	$this->items = $items;
    }

    public function getId()
    {
    	return $this->id;
    }

    abstract public function get($key);
    abstract public function getAll();
    abstract public function add($key, $value);    
    abstract public function remove($key);
    abstract public function contains($value);
    abstract public function push($value);
    abstract public function prepend($value);
    abstract public function sort(\Closure $callback);

}
