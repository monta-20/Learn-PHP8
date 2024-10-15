<?php
// Modifying a Cookie
// Modify the value of the existing 'username' cookie
setcookie("username", "new_value", time() + 86400, "/");

echo "Modified cookie value: " . $_COOKIE["username"];

//Deleting a cookie

//To delete a cookie, you set its expiration time to a time in the past. This effectively removes the cookie from the browser.

// Delete the 'username' cookie
setcookie("username", "", time() - 3600, "/");  // Set expiration time to the past

if (!isset($_COOKIE['username'])) {
    echo "Cookie 'username' is deleted!";
} else {
    echo "Failed to delete cookie!";
}

?>