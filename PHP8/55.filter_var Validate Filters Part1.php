<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */

  $bool = "Monta";  // "Monta" is not a valid boolean.
  var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));  // Output: NULL
 /*
 This filter checks if a value is a valid boolean. It considers the following as true: "True", 1, "Yes", "On". The filter flag FILTER_NULL_ON_FAILURE ensures that it returns NULL if the value is not a valid boolean.
 */

  echo "<br>";

  $url = "https://elzero.org/?id=100";

  var_dump(filter_var($url, FILTER_VALIDATE_URL,
  ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
/*
This filter validates if a given string is a valid URL. Flags like FILTER_FLAG_PATH_REQUIRED and FILTER_FLAG_QUERY_REQUIRED ensure that the URL contains both a path (e.g., /page) and a query string (e.g., ?id=100).
*/
//output : string(26) "https://elzero.org/?id=100"

  echo "<br>";

  $ip = "192.168.2.1";  // This is an IPv4 address.
  var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));
//Since "192.168.2.1" is an IPv4 address, but you're filtering for IPv6 (FILTER_FLAG_IPV6), it returns NULL because it doesn't meet the condition:
    //output :NULL

  echo "<br>";

  $mac = "00:00:5e:00d:53:af";  // This is an invalid MAC address (typo: '00d').
var_dump(filter_var($mac, FILTER_VALIDATE_MAC));  // Output: bool(false)
//The provided MAC address is invalid due to the typo (00d instead of 00:d), so the function returns false:
//Output :bool(false)
 
?>