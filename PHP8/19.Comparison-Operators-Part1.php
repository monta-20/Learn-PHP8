<?php
 /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal : Not check the type is just comparer the value.
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical : Check the type
    - !==   => Not Identical 
  */
   var_dump(100 == 100);//bool(true)
   echo '<br>';
   var_dump(100 == "100");//bool(true)
   echo '<br>';
   var_dump(100.0 == "100");//bool(true)
   echo '<br>';
   var_dump(100.0 != "100");//bool(false)
   echo '<br>';
   var_dump(100.0 <> "100");//bool(false)

   echo '<br>';
   echo '##############';
   echo '<br>';
 
   // Test Identical
   var_dump(100 === 100);//bool(true)
   echo '<br>';
   var_dump(100 === "100");//bool(false)
   echo '<br>';
   var_dump(100.0 === "100");//bool(false)
   echo '<br>';
   var_dump(100.0 === 100);//bool(false)
   echo '<br>';
   var_dump(100.0 !== "100");//bool(true)
   echo '<br>';
   var_dump(100.0 !== 100);//bool(true)
?>

<!-- The var_dump() function in PHP is used to display structured information about one or more variables, 
including its type and value. Arrays and objects are explored recursively with values indented to 
show structure.
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

the output is : 
array(3) {
[0]=>
int(1)
[1]=>
int(2)
[2]=>
array(3) {
[0]=>
string(1) "a"
[1]=>
string(1) "b"
[2]=>
string(1) "c"
}
} -->