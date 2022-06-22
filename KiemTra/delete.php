<?php
$id = $_REQUEST['id'];
include 'db.php';
global $conn;
$sql = "DELETE FROM products WHERE id = '$id'";
$conn->query($sql);
header('location:index.php');
