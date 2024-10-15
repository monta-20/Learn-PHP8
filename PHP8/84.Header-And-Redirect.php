<?php
/*
The header() function allows you to send HTTP headers, such as for content type or redirection. Redirects are particularly useful when you want to guide users to another page after form submissions, logins, or other events.
*/

// Redirect the user to another page
header("Location: https://www.example.com/");
exit(); // Make sure to stop the script after the redirect

// Redirect to another page on the same server
header("Location: /home.php");

// Permanent redirect (301 Moved Permanently)
header("Location: /new-page.php", true, 301);

// Prevent caching
header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// Your content here
echo "This page will not be cached.";

// Send a JSON response
header("Content-Type: application/json");

$data = [
    "name" => "Montassar",
    "age" => 25
];

// Convert the array to JSON and output
echo json_encode($data);
?>