<?php
 interface Stack{
     function push($item);
     function pop();
     function top();
     function isEmpty();
 }
 
 class Books implements Stack{
    protected $stack;
    protected $limit;
    
    public function __construct($limit ) {
        // initialize the stack
        $this->stack = array();
        // stack can only contain this many items
        $this->limit = $limit;
    }

    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
       echo 'Stack is full!'; 
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
            echo 'Stack is empty!'; 
	  //    throw new RunTimeException('Stack is empty!');
	  } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }
// lay ptu khong xoa
    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        // if(count($this->stack) == 0)){
        //     return true;
        // }
        // return false;
        return empty($this->stack);
    }
 }
 $myBooks = new Books(5);
$myBooks->push(1);
$myBooks->push(2);
 $myBooks->push(3);
$myBooks->push(4);
echo  "             :         ".$myBooks->pop();
echo  $myBooks->top();
echo "<pre>";
print_r($myBooks);