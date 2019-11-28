<?php

namespace Amplitudo;

//require_once "Collection.php";

class Stack extends Collection {
    public function __construct($items, $count)
    {
        parent::__construct($items, $count);
    }
    public function push($item)
    {
        try{
            // $this->add($item, $this->count);
            $this->items[$this->count] = $item;
            $this->count++;
        } catch(CollectionOverFlowException $e){
            echo '<h1>' . $e->getMessage() . '</h1>';
        }   
    }
    public function pop()
    {
        if(!$this->isEmpty()){
            $item = $this->items[$this->count-1];
            $this->count--;
            return $item; 
        } else {
            throw new RunTimeException('Stack is empty!');
        }
    }

    // public function top() {
    //     return current($this->items);
    // }
    
}