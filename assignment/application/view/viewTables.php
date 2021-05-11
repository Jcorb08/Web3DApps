<?php
  // echos the contents of the tables
  foreach($data as $row){
    echo '<br><br>';
    foreach($row as $item){
      echo $item . '<br>';
    }
  }
?>