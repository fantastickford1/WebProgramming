<?php

  session_start();
  include 'Connection';
  if ( isset( $_POST['submit'] ) ) {
    $user = $_POST["user"];
    $password = $_POST["password"];
    $sql = "SELECT User,Password FROM `usernames` WHERE User = '$user' AND Password = '$password'";
    $result = $conn -> query($sql);
    if ($result -> num_rows > 0) {
      $row = $result -> fetch_assoc();
      $_SESSION['username'] = $row['User'];
      // $conn -> close();
      header("Location:OSXElCapitan.html");
    }else {
      //$conn -> close();
      echo "<p>ERROR</p>";
    }
  }else
    echo "<p>ERROR</p>";
