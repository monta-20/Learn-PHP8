<?php
 /*
    Control Structure
    - Ternary Operator => Short If
 */

 $a = 10;
 if($a > 8) echo "Good"; else echo "Bad";
 echo '<br>';
 //Alternative
 // Condition ? True : False;
 echo $a >8 ? "Good" : "Bad";
 echo '<br>';
 //another solution 
 $result = $a>8 ? "Good" : "Bad";
 echo $result ;

 echo '<br>';

 echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";

 ?>
