<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartl";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// If database is not exist create one
if (!mysqli_select_db($conn,$dbname)){
  $sql = "CREATE DATABASE ".$dbname;
  if ($conn->query($sql) === TRUE) {
      // echo "Database created successfully";
  }else {
      // echo "Error creating database: " . $conn->error;
  }
} 

// Escape user inputs for security
$fullname = mysqli_real_escape_string($conn, $_REQUEST['fullname']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

// sql to create table
$sql = "CREATE TABLE register (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(30) NOT NULL,
  pass VARCHAR(30) NOT NULL,
  usertype VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL
  )";
  
if ($conn->query($sql) === TRUE) {
  // echo "Table users created successfully";
} else {
  // echo "Error creating table users: " . $conn->error;
}

$sql = "INSERT INTO register (fullname, pass, usertype, email)
VALUES ('$fullname', '$pass', 'student', '$email')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>