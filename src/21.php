<?php
// This is an example of generating a simple random string

// Ensure you are running PHP 7.3 or later
if (!extension_loaded("passthru")) {
    error_log("PHP does not support passthru.");
    exit();
}

$randomString = "";
for ($i = 0; $i < 15; $i++) { // Generate a string with 15 random characters
    $randomString .= bin2hex(random_bytes(3));
}
echo $randomString;

// Ensure you are running PHP 7.4 or later
if (!extension_loaded("passthru")) {
    error_log("PHP does not support passthru.");
    exit();
}
