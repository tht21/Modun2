<?php
require_once "node.php";
require_once "linkedList.php";
$list = new LinkedList();
$list->insertFistNode(5);
$list->insertFistNode(8);
echo "<pre>";

echo "'---------------------<br>";
$list ->insertLastNode(7);
var_dump($list->lastNode);

var_dump($list);