<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GENERAL KNOWLADGE - SMARTL | For Better Knowladge</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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

    <div class="parallax img1" id="Novels"></div>
    <div class="Gk text-center">
        <h1 class="text-dark"><b>NOVELS</b></h1>
        
        <div class="row iconFrame">
            <div class="col-lg-4">
                <h1 class="text-danger thumbnail" data-toggle="tooltip" title="Novel For you!">
                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files2/02.Harry-potter-and-the-chamber-of-secrets.pdf" class="text-danger"><i class="fas fa-file-pdf"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-warning" data-toggle="tooltip" title="Novel For you!">
                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files/NovelSample2.pdf" class="text-warning"><i class="fas fa-file-pdf"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-success" data-toggle="tooltip" title="Novel For you!">
                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files/NovelSample3.pdf" class="text-success"><i class="fas fa-file-pdf"></i></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="parallax img2" id="StoryBooks"></div>
    <div class="Gk text-center">
        <h1 class="text-dark"><b>STORY BOOKS</b></h1>
        
        <div class="row iconFrame">
            <div class="col-lg-4">
                <h1 class="text-danger thumbnail" data-toggle="tooltip" title="Story For you!">
                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files/StorySample.pdf" class="text-danger"><i class="fas fa-file-pdf"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-warning" data-toggle="tooltip" title="Story For you!">
                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files/StorySample2.pdf" class="text-warning"><i class="fas fa-file-pdf"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-success" data-toggle="tooltip" title="Story For you!">
                    <a href="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Files/StorySample3.pdf" class="text-success"><i class="fas fa-file-pdf"></i></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="parallax img3" id="DIYideas"></div>
    <div class="Gk text-center">
        <h1 class="text-dark"><b>DIY IDEAS</b></h1>
        
        <div class="row iconFrame">
            <div class="col-lg-4">
                <h1 class="text-danger thumbnail" data-toggle="tooltip" title="Ideas For you!">
                    <a href="https://www.youtube.com/watch?v=xY46caoQVC0" class="text-danger"><i class="fas fa-file-video"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-warning" data-toggle="tooltip" title="Ideas For you!">
                    <a href="https://www.youtube.com/watch?v=c8b8HSfOYiI" class="text-warning"><i class="fas fa-file-video"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-success" data-toggle="tooltip" title="Ideas For you!">
                    <a href="https://www.youtube.com/watch?v=VgYm5fpMBYo" class="text-success"><i class="fas fa-file-video"></i></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="parallax img4" id="Puzzles"></div>
    <div class="Gk text-center">
        <h1 class="text-dark"><b>PUZZLES</b></h1>
        
        <div class="row iconFrame">
            <div class="col-lg-4">
                <h1 class="text-danger thumbnail" data-toggle="tooltip" title="Puzzles For you!">
                    <a href="https://www.youtube.com/watch?v=u-tLlyCHqhQ" class="text-danger"><i class="fas fa-file-archive"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-warning" data-toggle="tooltip" title="Puzzles For you!">
                    <a href="https://www.youtube.com/watch?v=ugAUMbceVNU" class="text-warning"><i class="fas fa-file-archive"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-success" data-toggle="tooltip" title="Puzzles For you!">
                    <a href="https://www.youtube.com/watch?v=ycMPQOFkiOc" class="text-success"><i class="fas fa-file-archive"></i></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="parallax img5" id="Codings"></div>
    <div class="Gk text-center">
        <h1 class="text-dark"><b>CODINGS</b></h1>
        
        <div class="row iconFrame">
            <div class="col-lg-4">
                <h1 class="text-danger thumbnail" data-toggle="tooltip" title="Codes For you!">
                    <a href="https://www.youtube.com/watch?v=VqCgcpAypFQ" class="text-danger"><i class="fas fa-file-code"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-warning" data-toggle="tooltip" title="Codes For you!">
                    <a href="https://www.youtube.com/watch?v=C5QFHp1oAws" class="text-warning"><i class="fas fa-file-code"></i></a>
                </h1>
            </div>
            <div class="col-lg-4">
                <h1 class="text-success" data-toggle="tooltip" title="Codes For you!">
                    <a href="https://www.youtube.com/watch?v=bJiIzz8mFMs" class="text-success"><i class="fas fa-file-code"></i></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="parallax img6"></div>

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

    <br>
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