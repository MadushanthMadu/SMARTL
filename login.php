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
        // echo "Correct";
    }
    else{
        //wrong pass
        // echo "Incorrect";
    }
  }
} else {
  //wrong username
//   echo "Wrong username";
}

$conn->close();
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - SMARTL | For Better Knowladge</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>  
<body>

  <table width="100%" class="header" id="myHeader">
    <tr>
      <td align="center" width="15%" style="padding: 10px;">
        <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/SMARTL.png" width="75px">
      </td>

      <td align="left" width="85%">
        <font color="#000000" size="+2">
          <button>
            <a href="index.php" style="text-decoration:none ; font-size:20px">
              <b>HOME</b>
            </a>
          </button>&emsp;|&emsp;

          <button>
            <a href="Conference.php" style="text-decoration:none ; font-size:20px">
              <b>CONFERENCE</b>
            </a>
          </button>&emsp;|&emsp;

          <button>
            <a href="Papers.php" style="text-decoration:none ; font-size:20px">
              <b>PAPERS</b>
            </a>
          </button>&emsp;|&emsp;

          <button>
            <a href="General_Knowladge.php" style="text-decoration:none ; font-size:20px">
              <b>GENERAL KNOWLADGE</b>
            </a>
          </button>&emsp;|&emsp;

          <button>
            <a href="About.php" style="text-decoration:none ; font-size:20px">
              <b>ABOUT US</b>
            </a>
          </button>&emsp;|&emsp;

          <button>
            <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Login" >
              <b>LOGIN</b>
            </a>
          </button>
        </font>
      </td>
    </tr>
  </table>

  <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky)
            {
                header.classList.add("sticky");
            }
            else {
                header.classList.remove("sticky");
            }
        }
  </script>

  

  <table width="100%">
    <tr style="background-color:rgb(0, 35, 78)">
      <td width="30%" align="center">
            <br>
            <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/SMARTL2.png" width="200px">
      </td>
      <td width="15%">
            <p style="font-size:15px">
                <font color="#ffffff">MENU</font>
            </p>

            <p style="font-size: 0px">
                <button>
                    <a href="index.php" style="text-decoration:none">
                        <font color="#ffffff" size="-2">HOME</font>
                    </a>
                </button>

                <br>
                <button>
                    <a href="" style="text-decoration:none">
                        <font color="#ffffff" size="-2">CONFERENCE</font>
                    </a>
                </button>
                
                <br>
                <button>
                    <a href="Papers.php" style="text-decoration:none">
                        <font color="#ffffff" size="-2">PAPERS</font>
                    </a>
                </button>
                
                <br>
                <button>
                    <a href="General_Knowladge.php" style="text-decoration:none">
                        <font color="#ffffff" size="-2">G.KNOWLADGE</font>
                    </a>
                </button>
                
                <br>
                <button>
                    <a href="About.php" style="text-decoration:none">
                        <font color="#ffffff" size="-2">ABOUT US</font>
                    </a>
                </button>
            </p>
        </td>

      <td width="15%">
            <p style="font-size:15px">
                <font color="#ffffff">PAPERS</font>
            </p>

            <p style="font-size:0px">
                    <button>
                        <a href="Papers.php#OnlineExamination" style="text-decoration:none">
                            <font color="#ffffff" size="-2">ONLINE EXAMINATIONS</font>
                        </a>
                    </button>

                    <br>
                    <button>
                        <a href="Papers.php#PastPapers" style="text-decoration:none">
                            <font color="#ffffff" size="-2">PAST PAPERS</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="Papers.php#ModelPapers" style="text-decoration:none">
                            <font color="#ffffff" size="-2">MODEL PAPERS</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="Papers.php#TermPapers" style="text-decoration:none">
                            <font color="#ffffff" size="-2">TERM PAPERS</font>
                        </a>
                    </button>
                    
                    <br>
                    <button>
                        <a href="Papers.php#TextBooks" style="text-decoration:none">
                            <font color="#ffffff" size="-2">TEXT BOOKS</font>
                        </a>
                    </button>
                </p>
        </td>

      <td width="15%">
            <p style="font-size:15px">
                <font color="#ffffff">G.KNOWLADGE</font>
            </p>

            <p style="font-size:0px">
                <button>
                    <a href="General_Knowladge.php#Novels" style="text-decoration:none">
                        <font color="#ffffff" size="-2">NOVELS</font>
                    </a>
                </button>

                <br>
                <button>
                    <a href="General_Knowladge.php#StoryBooks" style="text-decoration:none">
                        <font color="#ffffff" size="-2">STORY BOOKS</font>
                    </a>
                </button>
                
                <br>
                <button>
                    <a href="General_Knowladge.php#DIYideas" style="text-decoration:none">
                        <font color="#ffffff" size="-2">DIY IDEAS</font>
                    </a>
                </button>
                
                <br>
                <button>
                    <a href="General_Knowladge.php#Puzzles" style="text-decoration:none">
                        <font color="#ffffff" size="-2">PUZZLES</font>
                    </a>
                </button>
                
                <br>
                <button>
                    <a href="General_Knowladge.php#Codings" style="text-decoration:none">
                        <font color="#ffffff" size="-2">CODINGS</font>
                    </a>
                </button>
            </p>
        </td>

      <td width="15%">
            <p style="font-size:15px">
                <font color="#ffffff">ABOUT US</font>
            </p>

            <p style="font-size:0px">
                <button>
                    <a href="About.php" style="text-decoration:none">
                        <font color="#ffffff" size="-2">ABOUT SMARTL</font>
                    </a>
                </button>

                <br>
                <button>
                    <a href="About.php#Why" style="text-decoration:none">
                        <font color="#ffffff" size="-2">WHY SMARTL</font>
                    </a>
                </button>
            </p>
        </td>

        <td width="10%"></td>
    </tr>
  </table>
</body>
</html>