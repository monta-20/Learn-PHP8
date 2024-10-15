<?php

// strlen() - Returns the length of a string.

echo strlen("Hello World!"); // Outputs: 12

//strpos() - Finds the position of the first occurrence of a substring in a string.

echo strpos("Hello World!", "World"); // Outputs: 6

//substr() - Returns a part of a string.

echo substr("Hello World!", 6); // Outputs: World!

//trim() - Strips whitespace (or other characters) from the beginning and end of a string.

echo trim("  Hello World!  "); // Outputs: Hello World!

//explode() - Splits a string by a specified delimiter into an array.

print_r(explode(" ", "Hello World!")); // Outputs: Array ( [0] => Hello [1] => World! )

//lcfirst() / ucfirst() - Converts the first character of a string to lowercase or uppercase, respectively.

echo ucfirst("hello world!"); // Outputs: Hello world!
echo lcfirst("Hello World!"); // Outputs: hello World!

//md5() - Calculates the MD5 hash of a string.

echo md5("password"); // Outputs: 5f4dcc3b5aa765d61d8327deb882cf99

//Link for all functions

//https://www.php.net/manual/en/ref.strings.php

?>