<?php

 /*
    Function
    - Introduction And DRY Concept
    - Parameter
    - Argument
  */
   
  echo "Hello Mr Montassar<br>";
  echo "Hello Mr Ahmed<br>";
  echo "Hello Mr Mohamed<br>";

  function say_hello_to($name){
    echo "Hello Mr $name<br>";
  }
  say_hello_to("Montassar");
  say_hello_to("Ahmed");
  say_hello_to("Mohamed");
?>