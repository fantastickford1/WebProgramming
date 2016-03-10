<?php

session_start();
include 'Connection.php';
if( isset($_POST['submit'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT User,Password FROM usernames WHERE User = '$user' AND Password = '$password'";
    $result = $conn ->query($sql);
    if($result -> num_rows > 0){
        $row = $result ->fetch_assoc();
        $_SESSION['username'] = $row['User'];
        $conn ->close();
        header("Location:OSXElCapitan.php");
    }else {
        $conn ->close();
        header("Location:LogInJ.php");
    }
}else
    echo "<p> ERROR </p>";
