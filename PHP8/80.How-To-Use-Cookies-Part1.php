<?php
/*
Cookies in PHP are a way to store small amounts of data on the client side, which can then be retrieved on subsequent visits to the website. Here’s a detailed explanation of how to use cookies in PHP with examples.
- setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
   - name: The name of the cookie.
   - value: The value stored in the cookie (it should be URL-encoded if special characters are involved).
   - expire: The expiration time as a Unix timestamp (in seconds).
   - path: The path on the server where the cookie is available.
   - domain: The domain that can access the cookie.
   - secure: If true, the cookie is sent only over secure (HTTPS) connections.
   - httponly: If true, the cookie is accessible only through the HTTP protocol (not by
*/
setcookie("username","montassar",time()+60*60*24,"/");
// Check if the cookie is set
if(isset($_COOKIE["username"])) {
    echo "Cookie 'username' is set!<br>";
    echo "Value: " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set!";
}

// path is neccesary for check the cookies
/*
Cookie 'username' is set!
Value: montassar
*/
?>