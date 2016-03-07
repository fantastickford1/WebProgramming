<?php

$conn = new mysqli("localhost","root","root","osusers");
$result;

// Check connection
if ($conn -> connect_error) {
  die ("Connection failed> " . $conn -> connect_error);
}else {
  $sql = "SELECT User,image FROM `usernames`";
  $result = $conn -> query($sql);
}
