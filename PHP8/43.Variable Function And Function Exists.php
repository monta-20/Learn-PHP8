<?php
/*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists
    --- function_exists("Func Name")
  */

  function one() {
    return "One From Function";
  }

  // echo one();

  $func1 = "one";

  echo $func1();

  echo '<br>';

  function say_hello_to($someone) {
    return "Hello $someone";
  }

  $func2 = "say_hello_to";

  echo $func2("Ahemd");

  echo '<br>';

  function testing() {
    return "Testing From Function";
  }

  if (function_exists("testing")) {
    echo testing();
  } else {
    echo "Function Not Found";
  }

  echo '<br>';

  // echo strlen("MONTA"); // 6

  $func3 = "strlen";

  echo $func3("MONTA");

?>