<?php
  
  /*
    Control Structure
    - Loop

    Foreach
  */

  $countries = ["TUN","ALG","EGY","MAR","LIB","MAU"];

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  foreach($countries as $country){
    echo $country . "<br>";
  }

  $countries_with_discount = ["TUN" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

  echo '<pre>';
  print_r($countries_with_discount);
  echo '</pre>';

  foreach($countries_with_discount as $country => $discount){
    echo "Country Name Is $country And Discount Is $discount <br>";
  }
?>