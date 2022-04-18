<?php
require_once "User.php";
require_once "Admin.php";

$admin = new Admin("admin","admin@gmail.com");
//admin ket thua getinfor user
echo $admin->getInfo()."<br>";
echo $admin->role;