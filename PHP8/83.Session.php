<?php
// Start a session : ONLY
session_start();

// Set a session variable
$_SESSION["username"] = "Montassar";

// Access session variables
if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
} else {
    echo "No session variable found!";
}

// Modify a session variable
$_SESSION["username"] = "NewUsername";

echo "Updated Username: " . $_SESSION["username"];

// Remove a session variable
unset($_SESSION["username"]);

echo "Session variable 'username' is removed.";

//If you want to completely destroy the session (all session data), you can use session_destroy().

// Destroy the session
// session_destroy();

// echo "Session is destroyed.";
?>