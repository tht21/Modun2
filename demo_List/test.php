<?php
//node structure
namespace LinkedList ;

use aaa\ListNode1;
use aaa\Node1;

class LinkedList{
  public $head;

  //constructor to create an empty LinkedList
  public function __construct(){
    $this->head = null;
  }
  
  //display the content of the list
  public function PrintList() {
    $temp = new Node1();
    $temp = $this->head;
    if($temp != null) {
      echo "The list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
      }
      echo "\n";
    } else {
      echo "The list is empty.\n";
    }
  }   
};

class LinkedList1 {
  public $_firstNode = NULL;
  public $_totalNodes = 0;
  
  public function insert(string $data = NULL) {
  $newNode = new ListNode1($data);
  
  if ($this->_firstNode === NULL) {
  $this->_firstNode = &$newNode;
  } else {
  $currentNode = $this->_firstNode;
  while ($currentNode->next !== NULL) {
  $currentNode = $currentNode->next;
  }
  $currentNode->next = $newNode;
  }
  $this->_totalNode++;
  return TRUE;
  }
  
  public function display() {
  echo "Total book titles:" .$this->_totalNode."\n";
  $currentNode = $this->_firstNode;
  while ($currentNode !== NULL) {
  echo $currentNode->data . "\n";
  $currentNode = $currentNode->next;
  }
  }
  }
