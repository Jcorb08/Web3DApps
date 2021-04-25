<?php
  var_dump($data);
  foreach($data as $row){
    echo '<br>';
    foreach($row as $item){
      echo $item . ' ';
    }
  }
?>