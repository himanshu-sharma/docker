<?php
ini_set('display_errors', '1');
$servername = "mysqldb";
$username = "user";
$password = "test";
$dbname = "myDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected and Config is working.";
}
