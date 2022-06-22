<?php session_start()?>
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
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM `products` WHERE `id` = $id";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetch se tra ve du lieu 1 ket qua
    $row = $stmt->fetch();
    $name=$price=$quantity=$description=null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     //  print_r($_REQUEST);die;
     $id = $_REQUEST['id'];
     $name = $_REQUEST['name'];
     $price = $_REQUEST['price'];
     $quantity = $_REQUEST['quantity'];
     $description = $_REQUEST['description'];
     $category = $_REQUEST['category_id'];
     $errors = [];
     $fields = ['name', 'price', 'quantity','description'];
     foreach ($fields as $field) {
         if (empty($_POST[$field])) {
             $errors[$field] = 'Không được để trống';
         }
     }
     if (empty($errors)) {
        $sql = "UPDATE products SET name = '$name',category_id='$category', description = '$description',quantity = '$quantity',price = '$price' WHERE id = '$id'";
        $conn->query($sql);
        header('location:index.php');
        $_SESSION['flash_message'] = "Chỉnh sửa  thành công";
     }
 }
     
    
    $sql = "SELECT * FROM category";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();

    ?>
    <div class="col-12 col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                Cập nhật thông tin khách hàng
            </div>
            <a class="btn btn-success mb-2" href="index.php">xem danh sach mat hang</a> 
            <div class="card-body">
                <div class="col-12">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Tên Hàng</label>
                            <input type="text" name="name" class="form-control" value='<?= $row->name ?>'>
                            <p class="text-danger"></p>
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label">Giá</label>
                            <input type="price" class="form-control" name="price" value='<?= $row->price ?>'>
                            <p class="text-danger"></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số Lượng</label>
                            <input type="quantity" class="form-control" name="quantity" value='<?= $row->quantity ?>'>
                            <p class="text-danger"></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mô Tả</label>
                            <input type="description" class="form-control" name="description" placeholder="" value='<?= $row->description ?>'>
                            <p class="text-danger"></p>
                        </div>
                        <div class="mb-3">
                            <label>Danh muc sản phẩm</label>
                            <select name="category_id" class="js-example-basic-single w-100">
                                <?php foreach ($rows as $key =>  $row) : ?>
                                    <option value="<?= $row->id ?>"> <?= $row->title ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>