<?php
/*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]

    Search
    - How Does PHP Compare Strings With Comparison Operators
  */
  var_dump(100 > 50); //bool(true)
  echo '<br>';
  var_dump(100 > 100); //bool(false)
  echo '<br>';
  var_dump(100 >= 100); //bool(true)
  echo '<br>';
  var_dump(100 >= 110); //bool(false)
  echo '<br>';
  var_dump(100 < 50); //bool(false)
  echo '<br>';
  var_dump(100 <= 50); //bool(false)
  echo '<br>';
  var_dump(100 <=> 200); // -1
  echo '<br>';
  var_dump(100 <=> 100); // 0
  echo '<br>';
  var_dump(100 <=> 50); // 1

  /*
  $x <=> $y	Returns an integer less than, 
  equal to, or greater than zero, depending 
  on if $x is less than, equal to, or greater
  than $y. Introduced in PHP 7.
  */

?>