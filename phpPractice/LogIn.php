<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 2/24/2016
 * Time: 8:51 PM
 */
    session_start();
    include 'Connection.php';
    if (isset($_SESSION['username'])){
        header("Location:Welcome.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn</title>
    <link rel="stylesheet" type="text/css" href="LogInstyle.css">
</head>
<body>
    <div class="back"></div>
    <div class="grad"></div>
    <div align="center" class="login">
        <h1>Sing in</h1>
        <form action="Validation.php" method="post">
            <input type="text" name="usr" id="username" placeholder="Username" required><br>
            <input type="password" name="psw" id="password" placeholder="Password" required><br>
            <input type="submit" value="Sign in" name="signin">
        </form>
        <p>
            Don't have an account? <a href="SignUp.html">Sign up now</a>
        </p>
    </div>
</body>
</html>
