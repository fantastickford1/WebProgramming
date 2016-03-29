<?php

session_start();
include 'Connection.php';
if( isset($_POST['submit'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usernames WHERE User = '$user' AND Password = '$password'";
    $result = $conn ->query($sql);
    if($result -> num_rows > 0){
        $row = $result ->fetch_assoc();
        $_SESSION['username'] = $row['User'];
        $_SESSION['type'] = $row['Type'];
        $_SESSION['image'] = $row['image'];

        $conn ->close();
        if($_SESSION['type'] == "User")
            header("Location:OSXElCapitan.php");
        else if($_SESSION['type'] == "Super")
            header("Location:OSXElCapitanAdmin.php");
    }else {
        $conn ->close();
        header("Location:LogInJ.php");
    }
}else
    echo "<p> ERROR </p>";
