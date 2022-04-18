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
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <h2 class="inactive underlineHover"><a href="singUp.php">Sign Up</a> </h2>
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="../login/img/User_icon_2.svg.png" id="icon" alt="User Icon" />
            </div>
            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" required="" placeholder="login">
                <input type="text" id="password" class="fadeIn third" name="login" required="" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="singUp.php">Forgot Password?</a>
            </div>

        </div>
    </div>
</body>

</html>