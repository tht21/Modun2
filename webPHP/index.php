<form action="" method="POST">
    Name: <input type="text" name="name">
    Password: <input type="password" name="password">
    <input type="submit" value="gui">
</form>
<?php
echo "phuong thuc gui du lieu  " . $_SERVER['REQUEST_METHOD'];
echo "<pre>";
print_r($_REQUEST);
//print_r($_SERVER['REQUEST_METHOD']);
echo "</pre>";
//kiem tra nguoi dung gui du lieu di
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //lay du lieu bang request tu form html name
    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];

    echo '<br> ten dang nhap ' . $name;
    echo '<br>mat khau' . $password;
}
?>   