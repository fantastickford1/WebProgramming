<?php

    session_start();
    include 'Connection.php';

    if (isset($_SESSION['username'])){

        $user = $_SESSION['username'];
        $sql = "SELECT Note FROM notes WHERE User = '$user' ";
        $result = $conn ->query($sql);
        $count = 0;
        if($result -> num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<li id='nota0".$count."' type='none' onclick='watchNotes(id)'>".$row["Note"]."</li>";
                $count++;
            }
            $conn ->close();
        }
    }