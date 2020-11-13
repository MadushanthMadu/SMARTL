<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASSROOM - SMARTL | For Better Knowladge</title>
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
    var sticky = header.offsetTop

    function myFunction() {
      if (window.pageYOffset > sticky)
      {
        header.classList.add("sticky");
      }
      else {
        header.classList.remove("sticky");
      }
    }

    $(function() {
	    $(".btn").click(function() {
		    $(".form-signin").toggleClass("form-signin-left");
        $(".form-signup").toggleClass("form-signup-left");
        $(".frame").toggleClass("frame-long");
        $(".signup-inactive").toggleClass("signup-active");
        $(".signin-active").toggleClass("signin-inactive");
        $(".forgot").toggleClass("forgot-left");   
        $(this).removeClass("idle").addClass("active");
	    });
    });

    function validateForm() {
      var password = document.forms["signup"]["pass"].value;
      var confirmpassword = document.forms["signup"]["confirmpassword"].value;

      if(password != confirmpassword){
        alert("Both the passwords should match");
      }
      else {
        $.ajax({
          url:'database.php',
          type:'post',
          data:$('#signup').serialize(),
          success:function(){
              console.log("worked");
          }
        });

        document.getElementById("fullname").value='';
        document.getElementById("email").value='';
        document.getElementById("pass").value='';
        document.getElementById("confirmpassword").value='';

        $('#Login').modal('hide');
        $('.modal-backdrop').remove();
      }
    }

    function LoginForm() {
      // document.getElementById("username").value='';
      // document.getElementById("password").value='';

      $('#Login').modal('hide');
      $('.modal-backdrop').remove();
    }
  </script>

    <h1 style="color:#0c63ce;" align="center">WELCOME TO SMART LEARN<br>CLASSROOM</h1>

    <br>
    <div class="host">
        <div class="col-12">
            <h3 style="color:#2681f2;" align="center">Create A Class</h3>
            <br>
            <form action="login.php" onsubmit="LoginForm()" name="signin" id="signin" method="post" enctype="multipart/form-data" align="center">
                <label for="username" style="color:black;"><b>Username</b></label>&emsp;
                <input type="text" name="username" id="username" style="width:300px; background-color:#e7f1fd; border:0; box-shadow:#2681f2 2px 2px 2px; border-radius:5px" required><br>
                <label for="password" style="color:black"><b>Password</b></label>&emsp;
                <input type="password" name="password" id="password" style="width:300px; background-color:#e7f1fd; border:0; box-shadow:#2681f2 2px 2px 2px; border-radius:5px" required><br><br>
                <input type="submit" class="hostbtn" value="Create">
            </form>
        </div>
    </div>

    <br><br>
    <div class="host">
        <div class="col-12">
            <h3 style="color:#2681f2;" align="center">Join A Class</h3>
            <br>
            <form id="join" name="join" align="center">
                <label for="id" style="color:black"><b>Room URL</b></label>&emsp;
                <input type="text" name="pass" id="pass" style="width:330px; background-color:#e7f1fd; border:0; box-shadow:#2681f2 2px 2px 2px; border-radius:5px" value="" required><br><br>
                <input type="button" onclick="joinmeet()" class="hostbtn" value="Join">
            </form>
        </div>
    </div>

    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="m_content">
                <div class="modal-body" id="m_body">
                    <div class="frame" id="m_frame">
                        <div class="nav">
                            <ul class="links">
                                <li class="signin-active"><a class="btn">Login</a></li>
                                <li class="signup-inactive"><a class="btn">Sign up</a></li>
                            </ul>
                        </div>
                        <div ng-app ng-init="checked = false">
                            <form class="form-signin" action="login.php" target="_blank" onsubmit="LoginForm()" name="signin" id="signin" enctype="multipart/form-data">
                                <label for="username">Username</label>
                                <input class="form-styling" type="text" name="username" id="username" required>
                                <label for="password">Password</label>
                                <input class="form-styling" type="password" name="password" id="password" required>
                                <input type="submit" class="btn-animate btn-signin" value="Login">
                            </form>
                        
                            <form class="form-signup" onsubmit="validateForm()" name="signup" id="signup" enctype="multipart/form-data">  
                                <label for="fullname">Full name</label>
                                <input class="form-styling" type="text" name="fullname" id="fullname" required>
                                <label for="email">Email</label>
                                <input class="form-styling" type="email" name="email" id="email" required>
                                <label for="role">Role</label><br>
                                &emsp;<span class="form-styling2" name="role">
                                <input type="radio" name="role" id="role" value="Teacher"><label>Teacher</label>
                                </span>&emsp;
                                <span class="form-styling2" name="role">
                                <input type="radio" name="role" id="role" value="Student"><label>Student</label>
                                </span>
                                <br><label for="pass">Password</label>
                                <input class="form-styling" type="password" name="pass" id="pass" required minLength=8>
                                <label for="confirmpassword">Confirm password</label>
                                <input class="form-styling" type="password" name="confirmpassword" id="confirmpassword" required>
                                <input ng-click="checked = !checked" type="submit" class="btn-signup" value="SIGN UP">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
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
                        <a href="Conference.php" style="text-decoration:none">
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

                    <br>
                    <button>
                        <a href="About.php#How" style="text-decoration:none">
                            <font color="#ffffff" size="-2">HOW SMARTL WAS BUILD</font>
                        </a>
                    </button>
                </p>
            </td>

            <td width="10%"></td>
        </tr>
    </table>
  </body>
</html>