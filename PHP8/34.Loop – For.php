<?php
 /*
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */

  $i = 1;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  echo '##### <br>';

  for($i = 1 ; $i<4 ;$i++){
    echo "$i<br>";
  }

  $index = 1;

  for (;;) :

    if ($index == 4) {

      break;

    }

    echo "$index<br>";

    $index++;

  endfor;
?>