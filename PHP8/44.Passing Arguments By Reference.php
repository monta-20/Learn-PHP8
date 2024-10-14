<?php

 /*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */
  function add_five(&$num){
    $num+=5;
    return $num;
  }
  $n=15;
  echo add_five($n) . "<br>";//20
  echo $n ; //20 if is not passing by refernece the value is 15.
  function calculate($n1 , $n2) : int{
    return $n1 + $n2 ;
  }
  echo '<br>';
  echo calculate(10.2 ,12.6); //22 is integer

  echo gettype(calculate(10.5, 9.5)); // Integer
 ?> 