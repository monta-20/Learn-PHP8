<?php
 /*
    Operators
    - Used To Perform Operations On Values.

    Incrementing &#038; Decrementing Operators
    - Increase And Decrease Values
  */
  
  // $variable++
  $a = 0 ;
  echo $a++; // 0
  echo '<br>';
  echo $a; // 1 
  echo '<br>';
  //++ $variable
  $b = 0 ;
  echo ++$b; // 1
  echo '<br>';
  echo $b; // 1 
  
  echo '<br>';

  $likes = 0;
  $likes++;
  $likes++;
  $likes++;
  $likes--;

  echo $likes; // 2
  echo '<br>';

  $a = 0;

  echo $a--; // 0
  echo '<br>';
  echo $a; // -1
  echo '<br>';

  $b = 0;

  echo --$b; // -1
  echo '<br>';
  echo $b; // -1
?>