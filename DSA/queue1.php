<?php
 class Queue1{
    protected $queue;
    protected $limit;
    
    public function __construct($limit ) {
        $this->queue = array();
        $this->limit = $limit;
    }

    public function enqueue($item) {
        // trap for stack overflow
        if (count($this->queue) < $this->limit) {
            // prepend item to the start of the array
            array_push($this->queue, $item);
        } else {
       echo 'Stack is full!'; 
        }
    }

    public function dequeue() {
        if ($this->isEmpty()) {
            // trap for stack underflow
            echo 'Stack is empty!'; 
	  //    throw new RunTimeException('Stack is empty!');
	  } else {
            // pop item from the start of the array
            return array_shift($this->queue);
        }
    }

    public function isEmpty() {
        // if(count($this->stack) == 0)){
        //     return true;
        // }
        // return false;
        return empty($this->queue);
    }
 }
 $myBooks = new Queue1(5);
 $myBooks->enqueue(1);
 $myBooks->enqueue(2);
  $myBooks->enqueue(3);
 $myBooks->enqueue(4);
 $myBooks->enqueue(5);
 $myBooks->dequeue();

 echo "<pre>";
 print_r($myBooks);