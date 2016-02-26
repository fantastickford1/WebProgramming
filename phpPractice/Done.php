<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 2/24/2016
 * Time: 10:12 PM
 */

    include "Connection.php";

    $username = $_POST['usr'];
    $password = $_POST['psw'];

    $sql = "INSERT INTO localusers (username,password) VALUES ('$username','$password')";
    if($conn -> query($sql) === TRUE){

    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Done</title>
        </head>
        <body>
            <h1>Welcome to the community</h1>
            <form action="LogIn.php">
                <input type="submit" value="Return">
            </form>
        </body>
        </html>

    <?php
    }else
        header("Location:Error.html");

    $conn -> close();
    ?>