<?php
require_once "node.php";
require_once "linkedList.php";
$list = new LinkedList();
$list->insertFistNode(5);
echo "<pre>";
var_dump($list->firstNode);
echo "'---------------------<br>";
$list ->insertLastNode(7);
var_dump($list->lastNode);
$list ->insertLastNode(5);
var_dump($list->lastNode);