<?php

session_start();

$user = $_SESSION['username'];
$action = $_POST['action'];
$data = $_POST['data'];
$dataToWrite = $_POST['toWrite'];
$path = $user."/".$data;
switch ($action) {
  case "create":
    fopen($path, "w");
    break;

  case "delete":
    unlink($path);
    break;

  case "edit":
    $myfile = fopen($path,"r");
    echo fread($myfile,filesize($path));
    fclose($myfile);
    break;

  case "editPages":
    $myfile = fopen($path, "w");
    fwrite($myfile, $dataToWrite);
    fclose($myfile);
    break;

  default:
    # code...
    break;
}
