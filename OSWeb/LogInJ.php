<?php

  session_start();
  include 'Connection.php';
  if(isset($_SESSION['username'])){
    if($_SESSION['type'] == "User")
      header("Location:OSXElCapitan.php");
    else if($_SESSION['type'] == "Super")
      header("Location:OSXElCapitanAdmin.php");
  }
  $sql = "SELECT User,image FROM `usernames`";
  $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/LogInStyle.css" rel="stylesheet">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div id="users" align="center" class="row">
        <div class="col-md-12" id="allUsers">
          <?php
          $count = 0;
          if ($result -> num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<div class='userBlock' id='usr".$count."' align='center'><img id='userImage' src='users/".$row["image"]."' alt='".$row["User"]."'>";
              echo "<p id='username'>".$row["User"]."</p></div>";
              $count++;
            }
          }
          ?>
        </div>
      </div>
      <div id="theUser" align="center" class="row">
        <div id="selectedUser" class="col-md-12">
        </div>
      </div>
      <div id="login" align="center" class="row">
        <div class="col-md-12">
          <form action="CheckIn.php" method="post">
            <input id="returnButton" type="button">
            <input id="userInput" name="user" type="text">
            <input id="passwordInput" name="password" type="password" placeholder="Enter Password">
            <input id="submitButton" type="submit" name="submit">
          </form>
        </div>
      </div>
      <div class="row">
        <div id="buttons"><img><img><img></div>
      </div>
    </div>
    <script src="js/logINFuntions.js"></script>
  </body>
</html>
