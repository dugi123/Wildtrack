<?php
$servername = "sql104.infinityfree.com";
$username = "if0_39563893";
$password = "htdeNDSYGv";
$dbname = "if0_39563893_wildtracks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>