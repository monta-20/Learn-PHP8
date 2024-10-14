<?php
 /*
    Pre-Defined Variables

    Search
    - PHP Pre-Defined Variables
  */

  // echo '<pre>';
  // print_r($_SERVER);
  // echo $_SERVER["HTTP_CONNECTION"];
  // echo '</pre>';
/* 
Superglobals — Built-in variables that are always available in all scopes
$GLOBALS — References all variables available in global scope
$_SERVER — Server and execution environment information
$_GET — HTTP GET variables
$_POST — HTTP POST variables
$_FILES — HTTP File Upload variables
$_REQUEST — HTTP Request variables
$_SESSION — Session variables
$_ENV — Environment variables
$_COOKIE — HTTP Cookies
$php_errormsg — The previous error message
$http_response_header — HTTP response headers
$argc — The number of arguments passed to script
$argv — Array of arguments passed to script*/
  echo "the name is "."".$_GET["username"];
?>

<form action="" method="get">
    <input type="text" name="username"/>
    <input type="password" name="email"/>
</form>