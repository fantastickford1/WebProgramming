<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 3/11/2016
 * Time: 9:08 AM
 */

include 'Connection.php';

$user = $_POST['user'];

$sql = "DELETE FROM usernames WHERE User = '$user'";
if ($conn->query($sql) === TRUE) {
    header("Location:OSXElCapitanAdmin.php");
} else {
    header("Location:OSXElCapitanAdmin.php");
}