<?php

function back_home(){
    echo '<a href="index.php">Obratno</a><br>';
}

function vremja(){
  date_default_timezone_set("Europe/Tallinn");
  $time = date("H:i:s");
  echo $time."<br>";
  if ($time < "17:15"){
    echo "Nado stradatj<br>";
  } else { echo "Pora domoj<br>"; }
}


 ?>
