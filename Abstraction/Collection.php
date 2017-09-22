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

    /* get one colection */
    abstract public function get($key);

    /* get all collections */
    abstract public function getAll();

    /* add one item to collection */
    abstract public function add($key, $value);

    /* remove one item from collection */
    abstract public function remove($key);

    /* cheks if value is in the collection */
    abstract public function contains($value);

    /* push one element at the end of the collection */
    abstract public function push($value);

    /* add one item on top of the collection */
    abstract public function prepend($value);

    /* sort the collection */
    abstract public function sort(\Closure $callback);
    
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
    

}
