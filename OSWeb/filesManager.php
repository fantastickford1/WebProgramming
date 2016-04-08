<?php

session_start();

$user = $_SESSION['username'];
$action = $_POST['action'];
$data = $_POST['data'];
$dataToWrite = $_POST['toWrite'];
$font = $_POST['font'];
$size = $_POST['size'];
$path = $user."/".$data;
switch ($action) {
  case "create":
    $myfile = fopen($path, "w");
    $someText = "NewFile"."$%#¡".$font.",".$size;
    fwrite($myfile, $someText);
    fclose($myfile);
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
    $dataToWrite = $dataToWrite."$%#¡".$font.",".$size;
    fwrite($myfile, $dataToWrite);
    fclose($myfile);
    break;

  default:
    # code...
    break;
}
