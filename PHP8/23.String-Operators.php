<?php

 /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .
    .=
  */

  define("Number", "0");

  $a = "Montassar";
  $b = "Ben Brahim";
  $c = "ENSI";

  echo "$a $b $c";//Montassar Ben Brahim ENSI
  echo '<br>';
  echo "{$a} {$b} {$c}";//Montassar Ben Brahim ENSI
  echo '<br>';
  echo $a . " " . $b . " " . $c;
  echo '<br>';
  echo "{$a} {$b} {$c} " . Number . " " . testing();
  echo '<br>';

  function testing() {
    return 1;
  }
  $x ="PHP8";
  $x.=".2.1";//PHP8.2.1
  echo $x ;