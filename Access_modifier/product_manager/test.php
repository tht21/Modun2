<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";
 
// tạo connection
$conn = new mysqli($servername, $username, $password, $dbname);
// kiểm connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // output dữ liệu trên trang
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " <br> Name: " . $row["name"]. " "
            . $row["datetime"]. "<br>". $row["address"]. "<br>". $row["position"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<table class="table" border="1" cellspacing="">
  <thead>
  <tr>
      <th>Name</th>
      <th>date time</th>
      <th>Address</th>
      <th>Position</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($employees as $key): ?>
  <tr>
      <td><?php echo $key->getName(); ?></td>
      <td><?php echo $key->getDatetime(); ?></td>
      <td><?php echo $key->getAddress(); ?>
      <td><?php echo $key->getPosition(); ?>
  <?php endforeach; ?>
  </tbody>
</table>
