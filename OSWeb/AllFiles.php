<?php

session_start();

$user = $_SESSION['username'];

if (is_dir($user)) {
  if ($dh = opendir($user)){
    $num = 0;
    while (($file = readdir($dh)) != false){
      if (is_dir($user."/".$file)){
        echo "<li id='file".$num."'><img src='img/folderfile.png' alt='folder' height='15' width='15'>".$file."</li>";
        $num++;
      }else{
        echo "<li id='file".$num."' onclick='filename(id)'><img src='img/textfile.png' alt='file' height='15' width='15'>".$file."</li>";
        $num++;
      }
    }
  }
}else {
  mkdir($user);
}
