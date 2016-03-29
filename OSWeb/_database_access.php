<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 3/10/2016
 * Time: 7:48 PM
 */


function addNote($conn){
    $user = $_SESSION['username'];
    $note = $_POST['note'];
    $current = $_POST['current'];

    $sql = "SELECT * FROM notes WHERE Note = '$current'";
    $result = $conn ->query($sql);
    if($result -> num_rows > 0){
        $sql = "UPDATE notes SET Note ='$note' WHERE Note = '$current'";
        $conn -> query($sql);
        $conn->close();
    }else{
        $sql = "INSERT INTO notes (User,Note) VALUES ('$user','$note')";
        $conn -> query($sql);
        $conn->close();
    }
}

function deleteNote($conn){
    $user = $_SESSION['username'];
    $note = $_POST['current'];
    $sql = "DELETE FROM notes WHERE Note = '$note' AND User = '$user'";
    $conn -> query($sql);
    $conn -> close();
}