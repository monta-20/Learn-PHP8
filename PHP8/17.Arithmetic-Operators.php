<?php

/*
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations &#038; Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
    - (-,+)"string" =>type will be integer 
    - "(-,+)string" =>type still string 
  */
  echo 10 + 20;//30
  echo '<br>';
  echo gettype(10 + 20);//intager
  echo '<br>';
  echo 9.5 + 20.5;//30
  echo '<br>';
  echo gettype(9.5 + 20.5);//double
  echo '<br>';

  echo 10 - 20;//-10
  echo '<br>';
  echo gettype(10 - 20);//intager
  echo '<br>';
  echo 9.5 - 20.5;//-11
  echo '<br>';
  echo gettype(9.5 - 20.5);//double
  echo '<br>';

  echo 10 * 20;//200
  echo '<br>';
  echo gettype(10 * 20);//intager
  echo '<br>';
  echo 9.5 * 20.5;//194.75
  echo '<br>';
  echo gettype(9.5 * 20.5);//double
  echo '<br>';

  echo 20 / 10;//2
  echo '<br>';
  echo gettype(20 / 10);//integer
  echo '<br>';
  echo 20 / 8;//2.5
  echo '<br>';
  echo gettype(20 / 8);//double
  echo '<br>';

  echo 21 % 10; // Remove 1 To Become 20 
  echo '<br>';
  echo 23 % 10; // Remove 3 To Become 20
  echo '<br>';
  echo 29 % 10; // Remove 9 To Become 20
  echo '<br>';
  echo 30 % 10; //0
  echo '<br>';

  echo 2 ** 4; //16
  echo '<br>';
  echo 2 * 2 * 2 * 2; //16
  echo '<br>';
  echo 3 ** 5; //243
  echo '<br>';
  echo 3 * 3 * 3 * 3 * 3; //243
  echo '<br>';

  echo "100";//100
  echo '<br>';
  echo gettype("100");//string
  echo '<br>';
  echo +"100";//100
  echo '<br>';
  echo gettype(+"100");//integer
  echo '<br>';

  echo "-100";//-100
  echo '<br>';
  echo gettype("-100");//string
  echo '<br>';
  echo -"-100";//100
  echo '<br>';
  echo gettype(-"-100");//integer
?>