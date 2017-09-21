<?php

use Willibert\Abstraction\Collection;

namespace Willibert\Collection;

class Category extends Collection
{
    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }
    
    public function get($key)
    {
    	return $this->items[$key];
    }
    
    public function getAll()
    {
    	return $this->items;
    }
    
    public function add($key, $value)
    {
    	$this->items[$key] = $value;
    }
    
    public function remove($key)
    {
    	unset($this->items[$key]);
    }

    public function contains($value)
    {
    	return in_array($this->items, $value);
    }
    
    public function push($value)
    {
    	
    }
    
    public function prepend($value)
    {
    	
    }

    public function sort(\Closure $callback)
    {
    	
    }
}
