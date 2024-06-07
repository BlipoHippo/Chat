<?php
  $MSG = fopen("MSG2.txt", "r");
  $x = fread($MSG, filesize("MSG2.txt"));
  //$y = '<span style="color: #FFFFFF;">';
  //$z = '</span>';
  echo "$x";
  fclose($MSG);

  function loadMSG() {
    ob_end_clean();
    $MSG = fopen("MSG2.txt", "r");
    echo fread($MSG, filesize("MSG2.txt"));
    fclose($MSG);
  }
?>