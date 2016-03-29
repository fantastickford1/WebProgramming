<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 3/11/2016
 * Time: 4:57 AM
 */

include 'Connection.php';

$user = $_POST['username'];
$psw = $_POST['password'];
$type = $_POST['type'];

$sql = "INSERT INTO usernames (User,Password,Type) VALUES ('$user','$psw','$type')";
if ($conn->query($sql) === TRUE) {
    header("Location:OSXElCapitanAdmin.php");
} else {
    header("Location:OSXElCapitanAdmin.php");
}