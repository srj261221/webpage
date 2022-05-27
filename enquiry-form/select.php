<?php

$host = "localhost";
$username = "root";
$password = "Rajat@1234";
$database = "rj";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM signup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "result is > 0";
} else {
  echo "0 results";
}
$conn->close();
?>