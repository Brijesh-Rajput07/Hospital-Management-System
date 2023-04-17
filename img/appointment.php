<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hospital";

$fname=$_GET['first_name'];
$lname=$_GET['last_name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$message = $_GET['message'];
$date = $_GET['date'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `appointment` (`first_name`,`last_name`,`phone`, `email`, `message`,`date`) VALUES ('$fname','$lname','$phone','$email', '$message','$date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: http://localhost:8080/Hospital_Main_Connect/home_page.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 