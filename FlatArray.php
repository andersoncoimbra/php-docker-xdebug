<?php

class FlatArray implements IteratorAggregate
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
        $this->flattenArray($array);
    }

    private function flattenArray(array $array)
    {
        foreach($array as $item){
            $this->array = array_merge($this->array, $item);
        }
    }
    
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->array);
    }
}