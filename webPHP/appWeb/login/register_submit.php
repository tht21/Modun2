<?php 
// echo "vao chuong trinh";
// echo "</pre>";
// print_r($_REQUEST);
if ($_SERVER['REQUEST_METHOD']== 'POST') {
  $name =$_REQUEST["username"];
  $phone =$_REQUEST["phone"];
  $password =$_REQUEST["password"];
  $confirmpassword =$_REQUEST["confirmpassword"];
if ($password==$confirmpassword) {
 //echo "nhap dung";
 header("Location:register_submit.php");
} else {
    echo "nhap sai pass";
}
}
?>