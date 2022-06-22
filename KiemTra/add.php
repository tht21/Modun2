<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý khách hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<?php
include 'db.php';
global $conn;
$sql = "SELECT * FROM category";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
$name=$price=$quantity=$description=null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        $sql = "INSERT INTO products  (category_id,name,description,quantity,price) VALUES ('$category','$name', '$description', '$quantity',' $price')";
        $conn->query($sql);
        $_SESSION['flash_message'] = "Thêm thành công";
        header('location:index.php');
    }
}
?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới khách hàng
        </div>
        <a class="btn btn-success mb-2" href="index.php">xem danh sach mat hang</a>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Tên Hàng</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label>Danh muc sản phẩm</label>
                        <select name="category_id" class="js-example-basic-single w-100">
                            <?php foreach ($rows as $key =>  $row) : ?>
                                <option value="<?= $row->id ?>"> <?= $row->title ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input type="price" class="form-control" name="price"value="<?php echo $price; ?>">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số Lượng</label>
                        <input type="quantity" class="form-control" name="quantity"value="<?php echo $quantity; ?>">
                        <?php if (isset($errors['quantity'])): ?>
                            <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                        <?php endif; ?>
                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <input type="description" class="form-control" name="description" placeholder=""value="<?php echo $description; ?>">
                        <?php if (isset($errors['description'])): ?>
                            <p class="text-danger"><?php echo $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>