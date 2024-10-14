<?php
/*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

  $a =10;
  $b = @$a or die("Variable Not Found");

  echo "Test $b";// test 10
  echo '<br>';

  $f = @file("monta.txt") or die("File Not Found");
  echo '<pre>';
  print_r($f);//File Not Found
  echo '</pre>';
  echo '<br>';

   // Include
   (@include("monta_bbrahim.php")) or die("Include File Not Found");
?>