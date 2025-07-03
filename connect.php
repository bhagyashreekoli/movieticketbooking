<?php
// Database connection parameters
$servername = "localhost";
$username = "root";  // Default MySQL user
$password = "";  // Leave this empty if there is no password, or set it to the correct password
$dbname = "onlinebooking";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>