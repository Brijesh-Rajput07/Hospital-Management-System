<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hospital";

$name=$_GET['name'];
$email=$_GET['email'];
$message = $_GET['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: http://localhost:8080/Hospital_Main_Connect/home_page.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 