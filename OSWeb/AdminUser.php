<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 3/11/2016
 * Time: 3:53 AM
 */

session_start();
include 'Connection.php';

if (isset($_SESSION['username'])){

    $user = $_SESSION['username'];

    $sql = "SELECT * FROM usernames WHERE User = '$user' ";
    $result = $conn ->query($sql);
    if($result -> num_rows > 0){
        $row = $result ->fetch_assoc();
        echo "<img id='adminImage' src='users/".$row['image']."'><p class='userName'><strong>".$user."</strong></p><p>".$row['Type']."</p>";
        $this->conn ->close();
    }
}