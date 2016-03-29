<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 3/11/2016
 * Time: 3:35 AM
 */

session_start();
include 'Connection.php';

if (isset($_SESSION['username'])){

    $user = $_SESSION['username'];
    $sql = "SELECT * FROM usernames";
    $result = $conn ->query($sql);
    if($result -> num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "<div class='allTheUsers'><img id='adminImage' src=users/".$row['image']."><p class='userName'><strong>".$row['User']."</strong></p><p>".$row['Type']."</p></div>";
        }
        $conn ->close();
    }
}