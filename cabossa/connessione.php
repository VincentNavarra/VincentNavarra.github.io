<?php
$servername = "localhost";
$username = "vincentnavarra";
$password = "";
$database = "my_vincentnavarra";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>