<?php

use Willibert\Abstraction\Collection;

namespace Willibert\Collection;

class Category extends Collection
{
   
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
    	uasort($this->items, $callback);
    }
}
