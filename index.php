<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a> 
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>

    </header>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="input-box">
                    <span class="span-icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required name = "txt_mail">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="span-icon"><ion-icon name="lock-closed-outline"></ion-icon></span> 
                    <input type="password" required name = "txt_pass">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name = "but_submit">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="span-icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" required name = "uname">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="span-icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required name = "umail">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="span-icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required name = "pass">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn" name = "reg_submit">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link"> Login</a></p>
                </div>
            </form>
        </div>
    </div>
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>