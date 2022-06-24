<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="CSS/signup.css">
</head>
<body>
    <div class="signup-poster">
    left
    </div>

    <div class="signup-form-wrapper">
        <h1>SIGN UP</h1>
        <form action="signup/handleSignup" name="login" method="post">

            <input class="input-field"  type="text" name="signupUsername" 
            id="signupUsername" placeholder="Username"
            value="<?php
            echo isset($_SESSION["signupUsername"]) ? $_SESSION["signupUsername"]: "";
            ?>"
            required>

            <input class="input-field"  type="email" name="signupEmail" 
            id="signupEmail" placeholder="Email"
            required>

            <input 
            class="input-field" placeholder="Password" 
            type="password" 
            name="signupPassword" 
            id="signupPassword" 
            pattern="(?=.*[a-z])+(?=.*[A-Z])+(?=.*[0-9])+(?=.*[^A-Za-z0-9])+(?=.{8,})"
            required>
            
            <div class="password-check-wrap">
                <h2 class="password-check" id="lowercasePassed">Lowercase character</h2>
                <h2 class="password-check" id="uppercasePassed">Uppercase character</h2>
                <h2 class="password-check" id="numberPassed">Number</h2>
                <h2 class="password-check" id="specialCharPassed">Special character</h2>
                <h2 class="password-check" id="lengthPassed">At least 8 characters</h2>
            </div>

            <input type="file" name="avtImg" id="avtImg">

            <input type="submit" name="signupBtn" 
            id="signupBtn" value="Sign Up">


            <p>
                <?php
                echo isset($_SESSION["signup_err_name"]) ? $_SESSION["signup_err_name"]: ""; 
                unset($_SESSION["signup_err_name"]);
                ?>
            </p>
        </form> 
    </div>

    <script src="script/passwordCheck.js"></script>
</body>
</html>

