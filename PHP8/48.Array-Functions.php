<?php
//array() - Creates an array.
$arr = array("Apple", "Banana", "Cherry");
//count() - Counts the number of elements in an array.
echo count($arr); // Outputs: 3
//array_pop() - Removes the last element from an array.
array_pop($arr);
print_r($arr); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry )
//array_merge() - Merges two or more arrays.
$arr2 = array("Orange", "Peach");
$merged = array_merge($arr, $arr2);
print_r($merged); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange [4] => Peach )
//array_keys() - Returns all the keys of an array.
$arr = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");
print_r(array_keys($arr)); // Outputs: Array ( [0] => a [1] => b [2] => c )
//array_values() - Returns all the values of an array.
print_r(array_values($arr)); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry )
//in_array() - Checks if a value exists in an array.
echo in_array("Banana", $arr); // Outputs: 1 (true)
//array_search() - Searches the array for a value and returns the key if found.
echo array_search("Cherry", $arr); // Outputs: c
//array_reverse() - Returns an array with elements in reverse order.
print_r(array_reverse($arr)); // Outputs: Array ( [0] => Cherry [1] => Banana [2] => Apple )
//sort() - Sorts an array in ascending order.
sort($arr);
print_r($arr); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry )
//rsort() - Sorts an array in descending order.
rsort($arr);
print_r($arr); // Outputs: Array ( [0] => Cherry [1] => Banana [2] => Apple )
//array_sum() - Returns the sum of the values in an array.
$arr = array(1, 2, 3, 4);
echo array_sum($arr); // Outputs: 10
//explode() - Splits a string into an array by a specified delimiter.
$string = "Apple, Banana, Cherry";
$arr = explode(", ", $string);
print_r($arr); // Outputs: Array ( [0] => Apple [1] => Banana [2] => Cherry )
//implode() - Joins array elements into a string with a specified delimiter.
$arr = array("Apple", "Banana", "Cherry");
echo implode(", ", $arr); // Outputs: Apple, Banana, Cherry
//array_unique() - Removes duplicate values from an array.
$arr = array("a", "b", "a", "c", "b");
$unique = array_unique($arr);
print_r($unique); // Outputs: Array ( [0] => a [1] => b [3] => c )

//Link for all functions in array
//https://www.php.net/manual/en/ref.array.php
?>