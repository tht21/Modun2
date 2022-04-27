<?php
// require_once "test.php";
// require_once "test1.php";


// test the code  
//create an empty LinkedList

use aaa\Node1;
use LinkedList\LinkedList1;

$MyList = new LinkedList();

//Add first node.
$first = new Node1();
$first->data = 10;
//linking with head node
$MyList->head = $first;

$MyList->PrintList();   
$BookTitles = new LinkedList1();
$BookTitles->insert("“Introduction to Algorithm”");
$BookTitles->insert("“Introduction to PHP and Data structures”");
$BookTitles->insert("“Programming Intelligence”");
$BookTitles->display();