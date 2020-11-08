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
            <a href="views/index.ejs" style="text-decoration:none ; font-size:20px">
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
        // return false;
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
      }
    }
  </script>

<div id="carouselExampleCaptions" class="carousel slide slidshow" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/OnlineExamination.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Online Examinations</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/PastPaper.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Past Papers</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/ModelPapers.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Model Papers</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/TermPaper.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Term Papers</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/Books.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Books</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/Novels.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Novels</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/StoryBooks.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Story Books</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/DIY_Ideas.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">DIY Ideas</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/Puzzles.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Puzzles</font></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/SLIIT/Codings.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="#2681f2" style="text-shadow: black 1px 1px 2px;">Codings</font></h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <br><br>
  <center><h1><font color="#0C63CE">FEATURES</font></h1></center>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="Imgs/pic2.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">FREE MEETINGS</h5>
            <p class="card-text text-primary"><font size="-1">Free and Unlimited Live Stream High Quality Video Conferences & Sound Systems With Less Data Usages. Powerful Meeting Security. Join Anywhere From Any Devices.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="Imgs/pic2.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">UNLIMITED CHATS</h5>
            <p class="card-text text-primary"><font size="-1">Free and Unlimited Chats While Video Conference With Group And Private Also. Fast Forward Messages At Any Moment. Easy And Fun Chats With Friends And Teachers.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="Imgs/pic2.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">SCREEN SHARING</h5>
            <p class="card-text text-primary"><font size="-1">Easy And Responsible Presentations And Screen Sharing On Your Screen During A Video Conference.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="Imgs/pic2.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">RECORDING</h5>
            <p class="card-text text-primary"><font size="-1">Capture High Quality Video And Voices In Any Moment In Any Conferences Freely And Easy.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/Feature1.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">PAPERS FOR DOWNLOAD</h5>
            <p class="card-text text-primary"><font size="-1">Ordinary Level Past Papers, Model Papers, Term Paper And Exercise Books Are Available For Tamil, English And Sinhala Medium Students.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/Feature2.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">ONLINE EXAMINATIONS</h5>
            <p class="card-text text-primary"><font size="-1">Very Useful Questions Are Collected For This Online Examinations For Ordinary Level Students. Instant Results.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/Feature3.png" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">SPECIAL KNOWLADGES</h5>
            <p class="card-text text-primary"><font size="-1">Many IQ Things Such As Novels, Story Books, DIY Ideas, Puzzles, Editings, Codings To Improve The Human Knowladge For Our Next Special Generations.</font></p>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
        <div class="card">
          <img class="card-img-top center-block" src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/Feature4.jpg" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title">Easy To Use</h5>
            <p class="card-text text-primary"><font size="-1">Very Easy Setting For All Contents Of Our Special Website.</font></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="m_content">
        <div class="modal-body" id="m_body">
          <div class="frame" id="m_frame">
            <div class="nav">
              <ul class="links">
                <li class="signin-active"><a class="btn">Sign in</a></li>
                <li class="signup-inactive"><a class="btn">Sign up </a></li>
              </ul>
            </div>
            <div ng-app ng-init="checked = false">
              <form class="form-signin" action="" method="post" name="signin" enctype="multipart/form-data">
                <label for="username">Username</label>
                <input class="form-styling" type="text" name="username" required>
                <label for="password">Password</label>
                <input class="form-styling" type="password" name="pass" required>
                <input type="submit" class="btn-animate btn-signin" value="Sign in">
              </form>
              
              <form class="form-signup" onsubmit="validateForm()" name="signup" id="signup">  
                <label for="fullname">Full name</label>
                <input class="form-styling" type="text" name="fullname" id="fullname" required>
                <label for="email">Email</label>
                <input class="form-styling" type="email" name="email" id="email" required>
                <label for="pass">Password</label>
                <input class="form-styling" type="password" name="pass" id="pass" required minLength=8>
                <label for="confirmpassword">Confirm password</label>
                <input class="form-styling" type="password" name="confirmpassword" required>
                <input ng-click="checked = !checked" type="submit" class="btn-signup" value="SIGN UP">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <table width="100%">
    <tr style="background-color:rgb(0, 115, 255)">
      <td colspan="6">
        <p style="text-align: center;"><font color="#ffffff">
          We expecting to improve the Knowledge of students how far we can. We are trying to improve educational knowledge & IQ also.
          Thats why SMARTL offering <b> Online Classes, Online Exams, Exam Papers, Novels, story books, DIY ideas & etc.</b>     
          Enjoy the learning and make step for better future.
        </font></p>
      </td>
    </tr>
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