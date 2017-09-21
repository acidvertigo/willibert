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
    	
    }
    
    public function getAll()
    {
    	
    }
    
    public function add($key, $value)
    {
    	
    }
    
    public function remove($key)
    {
    	
    }

    public function contains($value)
    {
    	
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
