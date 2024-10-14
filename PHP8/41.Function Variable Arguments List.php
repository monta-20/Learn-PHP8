<?php
 /*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */

  function calculate(...$nums){
    print_r($nums);
    echo '<br>';
    $sum=0;
    foreach($nums as $num){
      $sum+=$num ;
    }
    echo "The result is : ".$sum;
  }
  
  calculate(10,20,30,40,50,60);


?>