<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../login/css/style.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <h2 class="inactive underlineHover">Sign Up </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="../login/img/User_icon_2.svg.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="register_submit.php" method="post">
                <input type="text" name =" username"class="fadeIn second"required="" placeholder="ho va ten">
                <input type="text"name ="phone" class="fadeIn second"required="" placeholder="so dien thoai">
                <input type="text" name ="password" class="fadeIn third" required="" placeholder="mat khau">
                <input type="text"name ="confirmpassword"class="fadeIn third" required="" placeholder="nhap lai mat khau">
                <input type="submit" class="fadeIn fourth" value="Register">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="login.php">Login</a>
            </div>

        </div>
    </div>
</body>

</html>