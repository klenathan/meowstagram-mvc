<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="login-poster">
    left
    </div>

    <div class="login-form-wrapper">
        <form action="login/handleLogin" name="login" method="post">
            <input type="text" name="username" 
            id="username" placeholder="username"
            value="<?php
            echo isset($_SESSION["loginUsername"]) ? $_SESSION["loginUsername"]: "";
            unset($_SESSION["loginUsername"]);
            ?>">
            
            <input type="password" name="password" 
            id="password" placeholder="password">

            <input type="submit" name="loginBtn" 
            id="loginBtn" value="Login">
            <p>
                <?php
                echo isset($_SESSION["err_name"]) ? $_SESSION["err_name"]: "";
                // echo $_SESSION["loginUsername"];
                unset($_SESSION["err_name"]);
                ?>
            </p>
        </form> 
    </div>
</body>
</html>

