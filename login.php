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
$fullname = mysqli_real_escape_string($conn, $_REQUEST['username']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['password']);

$sql = "SELECT * FROM register WHERE fullname = '".$fullname."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. " " . $row["email"]. "<br>";
    if($row["pass"] == $pass){
        // echo "Login Successfully !";
        echo '<script type="text/JavaScript">  
        window.open("https://smart-learn-classroom.herokuapp.com/", "_top", "directories=yes,titlebar=yes,toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes");
        </script>' ;
    }
    else{
        // echo "Incorrect Password";
        echo '<script type="text/JavaScript">  
        window.open("conference.php", "_top", "directories=yes,titlebar=yes,toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes");
        </script>' ;
    }
  }
} else {
    // echo "Wrong username";
    echo '<script type="text/JavaScript">  
        window.open("conference.php", "_top", "directories=yes,titlebar=yes,toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes");
        </script>' ;
}

$conn->close();
?>