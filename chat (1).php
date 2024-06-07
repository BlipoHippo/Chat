<?php
date_default_timezone_set('Europe/London');

// Write MSG
function saveMSG() {
  $date = date("H:i d/m/Y");
  $name = $_GET["name"];
  $colour = $_GET["colour"];
  $mesg = $_GET["message-input"];
  $imgurl = $_GET["box2"];
  $MSG = fopen("MSG.txt", "r+");
  $ALLMSG = fopen("MSG2.txt", "r+");
  if (isset($_GET['checkbox-1'])) {
    $p = "<br><img src='$imgurl' width='auto' height='100'>";
  } else {
     $p = "";
  }
  $original = file_get_contents("MSG.txt");
  $message = "<span style='color: $colour;'>$name: </span>$mesg $p($date GMT) <br>";
  $msg = "$message $original";
  fwrite($MSG, $msg);
  fclose($MSG);
  fwrite($ALLMSG, $msg);
  fclose($ALLMSG);
}
saveMSG();
header('Location: '.'index.php');
?>