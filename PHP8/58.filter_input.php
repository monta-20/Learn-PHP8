<?php

/*

The filter_input() function in PHP is used to retrieve data from external sources, 
such as GET, POST, COOKIE, SERVER, or ENV, and optionally filter or sanitize that 
data using built-in filters. It is commonly used in forms, API requests, and user input handling.

- filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  
*/
// Example URL: https://example.com/?age=25

$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

if ($age === false) {
    echo "Invalid age!";
} else {
    echo "Age is valid: $age";
}
//Age is valid : 25 

//Using Options with filter_input()
$options = [
    'options' => [
        'min_range' => 18,
        'max_range' => 30
    ]
];

$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT, $options);

if ($age === false) {
    echo "Invalid age!";
} else {
    echo "Age is valid: $age";
}

// Assume the user submits a form with a field named "name"
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

echo "Sanitized name: $name";
?>