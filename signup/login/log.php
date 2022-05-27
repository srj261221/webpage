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

$email = $_GET["email"];
$password = $_GET["password"];


$result = $conn->query("SELECT * FROM signup WHERE email= '$email' and password= $password ");

if ($result->num_rows > 0) {
  header("location: home/home.php");
} else {
  echo "Login Failed";
}
//  echo $sql ;
//  echo $email ;

$conn->close();

?>