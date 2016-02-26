<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 2/24/2016
 * Time: 9:06 PM
 */
    session_start();
    include "Connection.php";
    if(isset($_POST['signin'])){
        $username = $_POST['usr'];
        $password = $_POST['psw'];
        $sql = "SELECT password,username FROM localusers WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result)>0){
            $row = $result -> fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $conn -> close();
            header("Location:Welcome.php");
        }else{
            $conn -> close();
            header("Location:SignUp.html");
        }
    }else
        header("Location:LogIn.php");
