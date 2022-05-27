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

$fname = $_GET["fname"];
$lname= $_GET["lname"];
$email = $_GET["email"];
$password = $_GET["password"];
$cpassword = $_GET["cpassword"];

if($password == $cpassword){

$sql = "INSERT INTO signup(fname, lname, email, password, cpassword) values('".$fname."', '".$lname."', '".$email."', '".$password."', '".$cpassword."' )";
$result = $conn->query($sql);
} else{
  echo "password couldn't match";
}
//  echo $lname ;
//  echo $email ;

$conn->close();

?>