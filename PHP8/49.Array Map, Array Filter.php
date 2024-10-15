<?php
  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */
  function add_title($fname, $lname) {
    return "Hello Mr $fname $lname";
  }
  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];
  echo '<pre>';
  print_r(array_map("add_title",$first_names,$last_names));
  /*
  Array
(
    [0] => Hello Mr Osama Ameer
    [1] => Hello Mr Ahmed Samy
    [2] => Hello Mr Sayed Shady
    [3] => Hello Mr Mahmoud Amr
    [4] => Hello Mr Sameh Mohamed
    [5] => Hello Mr Gamal Ibrahim
)
    */
$numbers = [1,2,3,4,5,6];
$squaredNumber = array_map(function($num){
    return $num * $num ;
},$numbers);
print_r($squaredNumber);
/*
Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)
*/

function isEven($num){
    return $num % 2 ===0 ;
}
$NUMs = [1,2,3,4,5,6];
$evenNumbers = array_filter($NUMs,"isEven");
print_r($evenNumbers);
/*
Array
(
    [1] => 2
    [3] => 4
    [5] => 6
)
*/

$nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1, $n2) {
    return $n1 > 4 || $n2 > 4;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  echo '</pre>';
  /*
  Array
(
    [6] => 1
    [4] => 8
    [5] => 4
)
    */
?>