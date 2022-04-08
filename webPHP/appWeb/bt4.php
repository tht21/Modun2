<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $number_1 = $_REQUEST["number1"];
        $number_2 = $_REQUEST["number2"];
        $operator = $_REQUEST["operation"];
        $tinh =0;
        switch ($operator) {
            case 'cong':
                $tinh = (int)$number_1 + (int) $number_2;
                break;
            case 'tru':
                $tinh = (int)$number_1 - (int)$number_2;
                break;
            case 'nhan':
                $tinh = (int) $number_1 * (int)$number_2;
                break;
            case 'chia':
                $tinh = (int)$number_1 / (int)$number_2;
                break;
        }
      
    }
    ?>
    <form method="post" action="">
        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
        <select name="operation">
            <option value="cong">+</option>
            <option value="tru">-</option>
            <option value="nhan">*</option>
            <option value="chia">/</option>
        </select>
        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
        <?php   echo "ket qua".$tinh; ?>
    </form>



</body>

</html>