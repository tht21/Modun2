<?php

class ListNode2
{

    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
}

class LinkedList2
{
    private $firstNode=null;
    private $lastNode;
   
    function insert($item){
        $node = new ListNode2($item);
     if ($this->firstNode==NULL) {
            $this->firstNode = $node;
        }
       else{
            $currentNode = $this->firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $node;
        }
    
    }
}
$BookTitles = new LinkedList2();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
echo"<pre>";
var_dump($BookTitles);

