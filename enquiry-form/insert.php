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

$name_value = $_GET["username"];
$number = $_GET["usernumber"];
$email = $_GET["email"];
$message = $_GET["message"];



$sql = "INSERT INTO visitors(name, number, email, message ) values('".$name_value."', '".$number."', '".$email."', '".$message."' )";
$result = $conn->query($sql);

// echo $name_value;
// echo $number;

$conn->close();

?>