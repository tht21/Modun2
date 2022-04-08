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
    <h1> Future Value Calculator</h1>
    <form method="post" action="">
        <div id="data">
            <label>Inventment Amount:</label>
            <input type="number" name="Inventment" /><br />
            <label>Yearly Interest Rate:</label>
            <input type="number" name="rate" />(%)<br />
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate" />
        </div>
    </form>
</div>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$result = $_REQUEST["Inventment"]+( $_REQUEST["Inventment"]* $rate = $_REQUEST["rate"]);
echo $result;
}
?>