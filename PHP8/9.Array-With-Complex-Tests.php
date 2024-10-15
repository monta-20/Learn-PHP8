<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */

  echo '<pre>';
  print_r([
    0 => "Sameh",
    "A" => "Ahmed",
    "B" => "Basem",
    "Mahmoud",
    True => "Sayed",
    "1" => "Osama",
    "Gamal",
    9 => "Amera",
    "Eman",
    "Mohamed",
    False => "Asmaa",
    8 => "Haytham",
    "Samer",
    "Names" => [
      "Osama",
      "Ahmed",
      "Sayed" => [
        "1",
        "2",
        "3"
      ]
    ]
  ]);
  echo '</pre>';
  /*
  Array
(
    [0] => Asmaa
    [A] => Ahmed
    [B] => Basem
    [1] => Osama
    [2] => Gamal
    [9] => Amera
    [10] => Eman
    [11] => Mohamed
    [8] => Haytham
    [12] => Samer
    [Names] => Array
        (
            [0] => Osama
            [1] => Ahmed
            [Sayed] => Array
                (
                    [0] => 1
                    [1] => 2
                    [2] => 3
                )

        )

)
        */
?>  