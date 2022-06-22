<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $key = $_REQUEST['search'];
    global $conn;
    $sql = "SELECT * FROM `products`  join category on products.category_id = category.id   WHERE name like'%$key%';";
    // print_r($sql);die;
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rowsearch = $stmt->fetchAll();
  
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý khách hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'db.php';
    global $conn;
    $sql = "SELECT products.*,category.title FROM products join category on products.category_id =category.id";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
    //print_r($rows);
    ?>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Trang chủ</a>
            </div>
        </nav>
        <div class="col-12 col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    Danh sách khách hàng
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <a class="btn btn-success mb-2" href="add.php">Thêm mới</a>
                        <form class="search-form" action="search.php" method="POST">
                            <input type="search" placeholder="Search Here" name="search" title="Search here">
                            <button type="submit" class="btn btn-sm btn-primary">seach</button>
                        </form>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Hàng</th>
                                    <th>Loại Hàng</th>
                                    <th></th>
                                </tr> <?php foreach ( $rowsearch as $key => $row) : ?>
                                    <tr>
                                        <td><?php echo $row->id ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->title ?></td>
                                        <td><a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                                            <a href="update.php?id=<?php echo $row->id; ?>" class="btn btn-primary btn-sm">Update</a>
                                        </td>
                                    <?php endforeach; ?>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>
