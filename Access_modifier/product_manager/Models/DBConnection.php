<?php
namespace Model;
$servername = "localhost";
$database = "employee";
$username = "root";
$password = "";
// Create connection
global $conn;
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>