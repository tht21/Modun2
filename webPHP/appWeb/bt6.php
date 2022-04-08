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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //lay gia tri gui vao
        $select_1=$_REQUEST['select1'];
        $select_2 = $_REQUEST['select2'];
        $number1 = $_REQUEST['number'];
        if ($select_1=="VietNam"&&$select_2=="VietNam") {
            echo ("viet nama");
        }else if($select_1=="USD"&&$select_2=="USD"){
            echo ("usd");
        }
         else if($select_1=="VietNam"&&$select_2=="USD"){
           $result =$number1*23000;
           echo $result."usd";
        }else{
             $result =$number1/23000;
            echo $result."vnd";
        }
    }
    ?>
    <form method="post" action="">
        <table>
            <tr>
                <th>Amount</th>
                <th>From curnecy</th>
                <th>To curency</th>
            </tr>
            <tr>
                <td><input type="number" name="number" /></td>
                <td>
                    <select name="select1">
                        <option value="VietNam">VietNam</option>
                        <option value="USD">USD</option>
                    </select>
                </td>
                <td>
                    <select name="select2">
                        <option value="VietNam">VietNam</option>
                        <option value="USD" >USD</option>
                    </select>
                </td>
                <th>
                    <input type="submit" id="">
                </th>
            </tr>
        </table>
        <table>
            <tr>
                result
                <td id="kq"></td>
            </tr>
        </table>
    </form>
    
</body>

</html>