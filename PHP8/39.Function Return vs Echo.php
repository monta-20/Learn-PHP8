<?php
  /*
    Function
    - Optional Return &#038; Null
    - End After Return
  */
  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

  function sum($a, $b){
    return $a + $b ;
    echo "Will Not Echo Anything";
  }

  echo sum(10,20);
  echo "<br>";
  echo $prizes[0];

  ?>