<?php
/***********************************************
 * Collection abstraction.
 **********************************************/

namespace Willibert\Abstraction;

abstract class Collection implements \Countable, \IteratorAggregate
{
    /* @var int $id collection id */
    protected $id;
    /* @var array $items collection container */
    protected $items;
    
    public function __construct($items)
    {
    	$this->items = $items;
    }

    public function getId()
    {
    	return $this->id;
    }

    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }
    
    /* get one colection */
    public function get($key)
    {
    	return $this->items[$key];
    }
    
    /* get all collections */
    public function getAll()
    {
    	return $this->items;
    }

    /* add one item to collection */
    public function add($key, $value)
    {
    	$this->items[$key] = $value;
    }
    
    /* remove one item from collection */
    public function remove($key)
    {
    	unset($this->items[$key]);
    }

    /* cheks if value is in the collection */
    public function contains($value)
    {
    	return in_array($this->items, $value);
    }
    
    /* push one element at the end of the collection */
    public function push($value)
    {
    	
    }
    
    /* add one item on top of the collection */
    public function prepend($value)
    {
    	
    }

    /* sort the collection */
    public function sort(\Closure $callback)
    {
    	uasort($this->items, $callback);
    }

}
