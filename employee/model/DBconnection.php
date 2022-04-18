<?php
namespace Model;
use PDO;
//THONG TIN CSDL
$host = 'localhost' ;
$username = 'root';
$password = '';
$database = 'employee' ;

//KẾT NỐI CSDL
global $conn;
$conn = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 
// Thông báo kết nối thành công
echo "Kết nối thành công";