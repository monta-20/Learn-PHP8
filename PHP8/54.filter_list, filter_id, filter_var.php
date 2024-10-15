<?php
/*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */
  echo "<pre>";
  print_r(filter_list());
  echo "</pre>";
  /*
  Array
(
    [0] => int
    [1] => boolean
    [2] => float
    [3] => validate_regexp
    [4] => validate_domain
    [5] => validate_url
    [6] => validate_email
    [7] => validate_ip
    [8] => validate_mac
    [9] => string
    [10] => stripped
    [11] => encoded
    [12] => special_chars
    [13] => full_special_chars
    [14] => unsafe_raw
    [15] => email
    [16] => url
    [17] => number_int
    [18] => number_float
    [19] => add_slashes
    [20] => callback
)
    */
    //This function returns the filter ID corresponding to a filter name. It can be useful when you want to get the numeric filter ID for a particular filter.
    echo filter_id("boolean") . "<br>"; // 258
    echo filter_id("int") . "<br>"; // 257
    
    
    $value = "123";
    if (filter_var($value, FILTER_VALIDATE_INT)) {
        echo "$value is an integer.";
    } else {
        echo "$value is not an integer.";
    }
//123 is an integer
//FILTER_VALIDATE_INT: Validates if the value is an integer.

       
?>