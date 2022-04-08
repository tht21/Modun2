<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>

<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description" /><br />
            <label>List Price:</label>
            <input type="text" name="price" /><br />
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent" />(%)<br />
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount" />
        </div>
    </form>
</div>
</body>

</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $description = $_POST["description"];
        $price = $_POST["price"];
        $discount_percent = $_POST["discount_percent"]/100;
        $discount_amount = $price * $discount_percent * 0.1;
        $discount_price = $price - $discount_amount;
        echo "<div id='content'>
                <h1>Product Discount Calculator</h1>
                <form>
                    <div id='data'>
                        <p>Product Description : " . $description . " </p>
                        <p>Price : " . $price . "%</p>
                        <p>Discount Percent : " . $discount_percent . "</p>                     
                        <p>Discount Amount:" . $discount_amount . "</p>
                        <p>Discount Price:" . $discount_price . "</p>
                    </div>
                </form>            
            </div>";
    }
    ?>
