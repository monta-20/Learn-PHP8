<?php


/*
  Control Structure
  - Including Files

  Include : a warning is issued, but the script continues to execute.
  Require : If the file cannot be found or loaded, a fatal error is thrown, and the script stops executing.
*/

include_once("test.php"); // $a = 10;

echo $a . '<br>';

$a = 20;

include_once("test.php"); // $a = 10;

echo $a . '<br>';

echo "Continue";
?>