<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Papers - SMARTL | For Better Knowladge</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            var grade;
            var category;

            function SetGradeAndCategory(grade, category){
                this.grade = grade;
                this.category = category;
            }

            function SelectMedium(medium){
                window.open("Papers_2.php?" + this.grade +"/"+ medium + "/" + this.category, "_blank", "directories=yes,titlebar=yes,toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes");
            }
        </script>
    </head>
<body>

    <table width="100%" class="header" id="myHeader">
        <tr>
          <td align="center" width="25%" style="padding: 10px;">
            <img src="https://hotelagape.s3.ap-south-1.amazonaws.com/SLIIT/Imgs/SMARTL.png" width="75px">
          </td>
    
          <td align="left" width="75%">
            <font color="#000000" size="+2">
              <button>
                <a href="index.php" style="text-decoration:none ; font-size:20px">
                  <b>HOME</b>
                </a>
              </button>&emsp;|&emsp;
    
              <!-- <button>
                <a href="" style="text-decoration:none ; font-size:20px">
                  <b>CONFERENCE</b>
                </a>
              </button>&emsp;|&emsp; -->
    
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
              </button>&emsp;&emsp;&emsp;&emsp;&emsp;
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

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="papers text-center" id="OnlineExamination">
                    <h2>Online Examinations</h2><br>
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(10, 0)">
                            <b>Grade 10</b>
                        </a>
                    </button>&emsp;|&emsp;
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(11, 0)">
                            <b>Grade 11</b>
                        </a>
                    </button>
                </div>

                <div class="papers text-center" id="PastPapers">
                    <h2>Past Papers</h2><br>
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(11, 1)">
                            <b>O/L</b>
                        </a>
                    </button>
                </div>

                <div class="papers text-center" id="ModelPapers">
                    <h2>Model Papers</h2><br>
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(11, 2)">
                            <b>O/L</b>
                        </a>
                    </button>
                </div>

                <div class="papers text-center" id="TermPapers">
                    <h2>Term Papers</h2><br>
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(10, 3)">
                            <b>Grade 10</b>
                        </a>
                    </button>&emsp;|&emsp;
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(11, 3)">
                            <b>Grade 11</b>
                        </a>
                    </button>
                </div>

                <div class="papers text-center" id="TextBooks">
                    <h2>Text Books</h2><br>
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(10, 4)">
                            <b>Grade 10</b>
                        </a>
                    </button>&emsp;|&emsp;
                    <button class="btn">
                        <a style="text-decoration:none ; font-size:20px" data-toggle="modal" data-target="#Lang" onclick="SetGradeAndCategory(11, 4)">
                            <b>Grade 11</b>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
      
    <div class="modal fade col-xl-12 col-lg-12 col-md-12 col-sm-12" id="Lang" tabindex="-1" role="dialog" aria-labelledby="Lang" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Select Your Language</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ol>
                    <li>
                        <button onclick="SelectMedium(0)">
                            Tamil Medium
                        </button>
                    </li>
                    <li>
                        <button onclick="SelectMedium(1)">
                            English Medium
                        </button>
                    </li>
                    <li>
                        <button onclick="SelectMedium(2)">
                            Sinhala Medium
                        </button>
                    </li>
                </ol>
            </div>
          </div>
        </div>
    </div>

    <br>
    <table width="100%" style="background-color:rgb(0, 35, 78)">
        <tr>
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
      
                  <!-- <br>
                  <button>
                      <a href="" style="text-decoration:none">
                          <font color="#ffffff" size="-2">CONFERENCE</font>
                      </a>
                  </button> -->
                  
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