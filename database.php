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
  email VARCHAR(50) NOT NULL
  )";
  
if ($conn->query($sql) === TRUE) {
  // echo "Table users created successfully";
} else {
  // echo "Error creating table users: " . $conn->error;
}

$sql = "INSERT INTO register (fullname, pass, email)
VALUES ('$fullname', '$pass', '$email')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM register WHERE fullname='rfg'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

function divide($a,$b){
  $c=$a/$b;
  return $c;
}

$conn->close();
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - SMARTL | For Better Knowladge</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
  </body>
</html>